const express = require("express");

const app = express();
const PORT = 3003;

app.use(express.json());

app.get("/", (req, res) => {
    res.send("Servidor de Pedidos funcionando!");
});

app.listen(PORT, () => {
    console.log("Projeto PEDIDOS rodando na porta " + PORT);
});