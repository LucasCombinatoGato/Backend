const express = require("express");

const app = express();
const PORT = 3001;

app.use(express.json());

app.get("/", (req, res) => {
    res.send("Servidor de Usuários funcionando!");
});

app.listen(PORT, () => {
    console.log("Projeto USUÁRIOS rodando na porta " + PORT);
});