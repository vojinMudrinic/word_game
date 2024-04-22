import { RouterProvider, createBrowserRouter } from "react-router-dom";
// local imports
import "./App.css";
import Layout from "./components/Layout/Layout";
import GamePage from "./components/pages/GamePage/GamePage";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Layout />,
    errorElement: <h1>404 Not found!</h1>,
    children: [
      {
        index: true,
        element: <GamePage />,
      },
    ],
  },
]);

function App() {
  return <RouterProvider router={router} />;
}

export default App;
