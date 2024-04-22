import { parsePalindromeStatus } from "../../../utils/utils";
import styles from "./OutputPrompt.module.css";
import Loader from "../../../svg/loader.svg";

const OutputPrompt = ({ data, isLoading = false }) => {
  const { score, palindrome_status, message } = data || {};

  return (
    <div className={styles.container}>
      {isLoading ? (
        <img src={Loader} alt="loader" />
      ) : (
        <>
          {message ? (
            <p className={styles.error}>{message}</p>
          ) : (
            <>
              <p>Score: {score || 0}</p>
              <p>{parsePalindromeStatus(palindrome_status)}</p>
            </>
          )}
        </>
      )}
    </div>
  );
};

export default OutputPrompt;
