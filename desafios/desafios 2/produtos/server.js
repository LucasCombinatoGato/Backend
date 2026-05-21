const express = require("express");

const app = express();
const PORT = 3002;

app.use(express.json());

app.get("/", (req, res) => {
    res.send("Servidor de Produtos funcionando!");
});

app.listen(PORT, () => {
    console.log("Projeto PRODUTOS rodando na porta " + PORT);
});