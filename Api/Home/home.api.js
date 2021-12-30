import httpClient from "~/api/httpClient";



export const getCategories = () => {
    return httpClient({
      url: 'https:localhost:8080/Blueberry/api/app/categories.php',
      method: 'get',
      headers: {
        "X-CSRF-TOKEN": getCookie('csrf_token')
      }
    });
  }
  