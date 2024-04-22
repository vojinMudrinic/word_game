import { Outlet } from "react-router-dom";
import styles from "./Layout.module.css";
import Header from "../UI/Header/Header";

const Layout = () => {
  return (
    <div className={styles.wrapper}>
      <Header />
      <Outlet />
    </div>
  );
};

export default Layout;
