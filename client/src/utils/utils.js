export const parsePalindromeStatus = (status) => {
  switch (status) {
    case 1:
      return "The word is not a palindrome";
    case 2:
      return "The word is almost a palindrome";
    case 3:
      return "The word is a palindrome";
    default:
      return "";
  }
};
