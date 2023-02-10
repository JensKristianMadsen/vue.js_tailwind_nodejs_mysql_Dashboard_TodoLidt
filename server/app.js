import express from "express";
import dotenv from "dotenv";
import cors from "cors";
import session from "express-session";
import userRouter from "./routers/userRouter.js";



const app = express();

dotenv.config();

app.use(cors());

app.use(
  session({
    secret: process.env.SECRET_SESSION,
    resave: false,
    saveUninitialized: true,
    cookie: { secure: false },
  })
);

app.use(userRouter);

app.get("/", (req, res) => {

  res.send("hello");
});

const PORT = process.env.PORT || 8080;

app.listen(PORT, () => {

  console.log("The server is running on port:", PORT);
});