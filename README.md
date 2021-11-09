# Edvora Test auth api documentation
    (https://advora-test-api.herokuapp.com)
    host: advora-test-api.herokuapp.com
    basePath: /api/

# Getting Started #
Our API is organised around using HTTP verbs and REST. Our API accepts and returns JSON formatted payload

# Register Api #
This endpoint is commonly used to register
|  |  |
| ------ | ------ |
| Request Type | ``` POST ``` |
| Endpoint |  ``` /register ``` |

Body Params
| Param	 | Required | Description |
| ------ | ------ | ------ |
| name |  yes | string |
| email |  yes | string |
| password |  yes | string |
Sample Request
```json
[
      {
            "name": "string",
            "email": string,
            "password": "string",
      }
]
```
Sample Response
```json
[
      {
           "status": 200,
            "message": "Registratio success",
      }
]
```

# Login Api #
This endpoint is commonly used to login
|  |  |
| ------ | ------ |
| Request Type | ``` POST ``` |
| Endpoint |  ``` /login ``` |

Body Params
| Param	 | Required | Description |
| ------ | ------ | ------ |
| email |  yes | string |
| password |  yes | string |
Sample Request
```json
[
      {
            "email": string,
            "password": "string",
            "token": "jdkidoiewekmoxmwompwkllwklwkwl"
      }
]
```
Sample Response
```json
[
      {
           "status": 200,
            "message": "Registratio success",
      }
]
```

# Forget password Api #
This endpoint is commonly used forget password
|  |  |
| ------ | ------ |
| Request Type | ``` POST ``` |
| Endpoint |  ``` /forget-password ``` |

Body Params
| Param	 | Required | Description |
| ------ | ------ | ------ |
| email |  yes | string |
Sample Request
```json
[
      {
            "email": string,
      }
]
```
Sample Response
```json
[
      {
           "status": 200,
            "message": "Registratio success",
      }
]
```

# Reset password Api  #
This endpoint is commonly used terminate all session and reset the password
|  |  |
| ------ | ------ |
| Request Type | ``` POST ``` |
| Endpoint |  ``` /reset-password ``` |

Body Params
| Param	 | Required | Description |
| ------ | ------ | ------ |
| token |  yes | string |
| email |  yes | string |
| password |  yes | string |
| Comfirm password |  yes | string |
Sample Request
```json
[
      {
            "token": "string",
            "email": string,
            "password": "string",
      }
]
```
Sample Response
```json
[
      {
           "status": 200,
            "message": "Password changed ",
      }
]
```

# Terminate Api  #
This endpoint is commonly used to terminate the session ad logout
|  |  |
| ------ | ------ |
| Request Type | ``` POST ``` |
| Endpoint |  ``` /logout ``` |


```
Sample Response
```json
[
      {
           "status": 200,
            "message": "session terminated, logout success",
      }
]
```

