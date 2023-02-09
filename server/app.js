import express from "express";
import dotenv from "dotenv";
import userRouter from "./routers/userRouter.js";

dotenv.config();

const app = express();

app.use(userRouter);

app.get("/", (req, res) => {
  res.send("hello");
});

const PORT = process.env.PORT || 8080;

app.listen(PORT, () => {
  console.log("The server is running on port:", PORT);
});
