import styles from "./GamePage.module.css";
import Button from "../../UI/Button/Button";
import Input from "../../UI/Input/Input";
import { scoreWord } from "../../../api/api";
import { useState } from "react";
import OutputPrompt from "../../UI/OutputPrompt/OutputPrompt";

const GamePage = () => {
  const [data, setData] = useState(null);
  const [loading, setLoading] = useState(false);

  const submitWord = async (e) => {
    e.preventDefault();
    try {
      setLoading(true);
      const value = e.target.elements["word"].value;
      if (!value) return;
      const formData = { word: value };
      const response = await scoreWord(formData);
      const { data } = response;
      setData(data);
    } catch (err) {
      console.error(err);
    } finally {
      setLoading(false);
    }
  };

  return (
    <form className={styles.container} onSubmit={submitWord}>
      <OutputPrompt data={data} isLoading={loading} />
      <Input name={"word"} placeholder={"Enter word"} disabled={loading} />
      <Button text={"Submit"} disabled={loading} />
    </form>
  );
};

export default GamePage;
