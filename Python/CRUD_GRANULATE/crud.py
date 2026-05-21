# import json

# def menu():
#     print("\n--- Menu ---")
#     print("1. Adicionar")
#     print("2. Listar ")
#     print("3. Atualizar ")
#     print("4. Deletar ")
#     print("0. Sair")

# def escolher_grupo():
#     print("\n--- Grupos ---")
#     print("1. Aluno")
#     print("2. Professor")
    
#     opcao = int(input("Escolha um grupo: "))
    
#     if opcao == "1":
#         return "Aluno"
#     elif opcao == "2":
#         return "Professor"
#     else:
#         print("Opção inválida")
#         return
    
def ler_dados():
    with  open("contatos.json", "r", encoding="utf-8") as arquivo:
        return json.load(arquivo)
    
# def salvar_dados(dados):
#     with open("contatos.json", "w", encoding="utf-8") as arquivo:
#         json.dump(dados, arquivo, indent=2, ensure_ascii=False)
    
# def adicionar():
#     grupo = escolher_grupo()
#     if not grupo:
#         return
    
#     nome = input("Digite o nome: ")
#     idade = int(input("Digite a idade: "))
    
#     dados = ler_dados()
    
#     dados[grupo].append({
#         "nome": nome,
#         "idade": idade
#     })
    
    # salvar_dados(dados)
    # print("Contato adicionado com sucesso!")

# def listar():
#     grupo = escolher_grupo()
#     if not grupo:
#         return
    
#     dados = ler_dados()
#     print(f"\nLista de {grupo.upper()}: ")
    
#     for index, contato in enumerate(dados[grupo], start=1):
#         print(f"{index}. Nome: {contato['nome']} | Idade: {contato['idade']}")

def atualizar():
    grupo = escolher_grupo()
    if not grupo:
        return
    
    dados = ler_dados()
    index = int(input("Numero do index: ")) - 1

    
    if 0 <= index < len(dados[grupo]):
        nome = input("Digite o novo nome: ")
        telefone = int(input("Digite o novo telefone: "))
        
        dados[grupo][index] = {
            "nome": nome,
            "telefone": telefone
        }
        
        salvar_dados(dados)
        print("Contato atualizado com sucesso!")

    else:
        print("Index inválido.")

def excluir():
    grupo = escolher_grupo()
    if not grupo:
        return
    
    dados = ler_dados()
    index = int(input("Numero do index: ")) - 1

    if 0 <= index < len(dados[grupo]):
        del dados[grupo][index]
        salvar_dados(dados)
        print("Contato excluído com sucesso!")
    else:
        print("Index inválido.")

def main():
    while True:
        menu()
        opcao = input("Escolha uma opção: ")

        if opcao == "1":
            adicionar()
        elif opcao == "2":
            listar()
        elif opcao == "3":
            atualizar()
        elif opcao == "4":
            excluir()
        elif opcao == "0":
            print("Saindo...")
            break
        else:
            print("Opção inválida. Tente novamente.")