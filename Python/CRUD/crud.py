# import json
# import os

# def carregar_dados():
#     # Se o arquivo não existir = array vazio
#     if not os.path.exist("dados.json"):
#         return []

#     with open("dados.json", "r", encoding="utf-8") as arquivo:
#         # o 'r' - READ (Somente leitura)
#         return json.load(arquivo)

def salvar_dados(dados):
    # Abrir como escrita 'w' - WRITE
    with open ("dados.jaon", "w", encoding="utf-8") as arquivo:
        json.dump(dados, arquivo, indent=4, ensure_ascii=False)

def criar_pessoa(nome, idade):
    dados = carregar_dados()

    #gerar ID
    novo_id = 1
    if dados:
        novo_id = dados[-1]["id"] + 1

    pessoa = {
        "id": novo_id,
        "nome": nome,
        "idade": idade
    }

    dados.append(pessoa)
    salvar_dados(dados)

    print("Pessoa cadastrada com sucesso!")

def listar_pessoas():
    dados = carregar_dados()

    if not dados:
        print("Nenhum registro encontrado.")
        return

    for pessoa in dados:
        print(f"ID: {pessoa["id"]} \nNome: {pessoa["nome"]} \n Idade: {pessoa["idade"]}")

def atualizar_pessoa(id, novo_nome, nova_idade):
    dados = carregar_dados()

    for pessoa in dados:
        if pessoa["id"] == id:
            pessoa["nome"] = novo_nome
            pessoa["idade"] = nova_idade
            salvar_dados(dados)
            print("Pessoa atualizada com sucesso")
            return
        print("ID não encontrado.")

def deletar_pessoa(id):
    dados = carregar_dados()

    # Criar nova lista sem o ID informado
    dados = [pessoa for pessoa in dados if pessoa["id"] != id]

    salvar_dados(dados)
    print("Pessoa removida (se existia).")

while True:
    print ("\n1- Cadastrar")
    print ("2- Listar")
    print ("3- Atualizar")
    print ("4- Deletar")
    print ("" \
    "0- Sair")

    opcao = input("Escolha: ")

    if opcao == "1":
        nome = input("Nome: ")
        idade = int(input("Idade: "))
        criar_pessoa(nome, idade)

    elif opcao == "2":
        listar_pessoas()
    
    elif opcao == "3":
        id = int(input("ID da pessoa a ser atualizada: "))
        novo_nome = input("Digite o novo nome: ")
        nova_idade = int(input("Digite a nova idade: "))
        atualizar_pessoa(id, novo_nome, nova_idade)
    
    elif opcao == "4":
        id = int(input("ID da pessoa a ser deletada"))
        deletar_pessoa(id)
    
    elif opcao == "0":
        print("Encerrando o programa...")
        break
    
    else:
        print("Opção inválida. Tente Novamente.")