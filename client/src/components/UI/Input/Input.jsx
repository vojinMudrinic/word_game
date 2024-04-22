import styles from "./Input.module.css";

const Input = ({ placeholder, name, disabled }) => {
  return (
    <input
      className={styles.container}
      placeholder={placeholder}
      name={name}
      disabled={disabled}
    />
  );
};

export default Input;
