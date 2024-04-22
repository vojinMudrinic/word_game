import axios from "axios";

const api = axios.create({
  baseURL: "http://localhost:8000/api/v1",
});

export const scoreWord = async (data) => {
  try {
    const response = await api.post("/score-word", data);
    return response;
  } catch (error) {
    throw Error(error.message);
  }
};
