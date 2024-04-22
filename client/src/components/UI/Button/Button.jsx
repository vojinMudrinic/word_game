import styles from "./Button.module.css";

const Button = ({ type = "submit", text, disabled = false }) => {
  return (
    <button
      className={`${styles.container} ${disabled ? styles.disabled : ""}`}
      type={type}
      disabled={disabled}
    >
      <p>{text}</p>
    </button>
  );
};

export default Button;
