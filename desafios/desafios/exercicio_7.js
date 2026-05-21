const express = require("express");
const app = express();

app.use(express.json());

let usuarios = [];
let id = 1;

// GET
app.get("/usuarios", (req, res) => {
    res.json(usuarios);
});

// POST
app.post("/usuarios", (req, res) => {
    const { nome } = req.body;
    const usuario = { id: id++, nome };
    usuarios.push(usuario);
    res.json(usuario);
});

// GET por ID
app.get("/usuarios/:id", (req, res) => {
    const usuario = usuarios.find(u => u.id == req.params.id);
    res.json(usuario);
});

// PUT
app.put("/usuarios/:id", (req, res) => {
    const usuario = usuarios.find(u => u.id == req.params.id);
    if (usuario) {
        usuario.nome = req.body.nome;
    }
    res.json(usuario);
});

// DELETE
app.delete("/usuarios/:id", (req, res) => {
    usuarios = usuarios.filter(u => u.id != req.params.id);
    res.json({ mensagem: "Removido" });
});

app.listen(3000, () => {
    console.log("Servidor rodando");
});