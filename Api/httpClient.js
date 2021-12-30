import axios from 'axios';

const httpClient = axios.create({
  headers: {
    "Content-Type": "application/json",
  }
})

// interceptor to catch errors
const errorInterceptor = error => {
  // check if it's a server error
  if (!error.response) {
    return Promise.reject(error);
  }

  // all the other error responses
  switch (error.response.status) {

    case 401: // authentication error, logout the user
      localStorage.removeItem('auth_token');
      stop();
      location.href = '/auth/login';
      break;

    default:
  }
  return Promise.reject(error);
}

// Interceptor for responses
const responseInterceptor = response => {
  switch (response.status) {
    case 200:
      // yay!
      break;
    // any other cases
    default:
    // default case
  }

  return response;
}

httpClient.interceptors.response.use(responseInterceptor, errorInterceptor);

export default httpClient;
