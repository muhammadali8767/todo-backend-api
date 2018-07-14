# todo-backend-api

# Token based access control


API ROUTES:

    # Register

        http://todo-backend-api.test/api/register

        request type: POST,

        name: required | string,
        email: required | string,
        password: required | string,

    # Login

        http://todo-backend-api.test/api/login

        request type: POST,

        username: required | string,
        password: required | string,

        First u need to register. then login. when u login you'll be geven access_token which allovs u controll your todos.

    # Geting Todos

        http://todo-backend-api.test/api/todo

        request type: GET

        when u tryiing to get your todos u need send your access_token with header
        for example: 
        key: Authorization
        value: Bearer [your access_token]

    #Insert new todo

        http://todo-backend-api.test/api/todo

        request type: POST

        title: requited | string,
        completed: required | boolean,
        
        should be sent with Authorization header

    #Update todo
    
        http://todo-backend-api.test/api/todo/{id} 
          wiil be sent id of existing todo 
          for example http://todo-backend-api.test/api/todo/4
        
        request type: PATCH

        title: requited|string,
        completed: required|boolean,
        
        should be sent with Authorization header
      
    #Delete todo
        
        http://todo-backend-api.test/api/todo/{id} 
          wiil be sent id of existing todo 
        
        request type: DELETE
        
    #Delete completed
        
        http://todo-backend-api.test/api/todoDeleteCompleted
        
        request type: DELETE
        
        todos: required | array
