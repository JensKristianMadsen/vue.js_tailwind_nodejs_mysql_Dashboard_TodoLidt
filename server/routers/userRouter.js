import express from "express";
import db from "../database/create-connection.js";
import bcrypt from "bcrypt";
import dotenv from "dotenv";

dotenv.config();

const saltRounds = Number(process.env.SALT_ROUNDS);

const router = express.Router();

router.use(express.json());

//POST
router.post("/api/signup", async (req, res) => {
  //destructuring

  const { username, email, password } = req.body;

  const passwordHash = await bcrypt.hash(password, saltRounds);

  const sqlQuery =
    "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

  db.query(sqlQuery, [username, email, passwordHash], (error, result) => {
    if (error) {
      return res.status(500).send({ message: error.sqlMessage });
    }

    return res.status(201).send({ message: "User is signed up" });
  });
});

export default router;
