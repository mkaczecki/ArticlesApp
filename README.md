# ArticlesApp
ArticlesApp is a simple PHP MVC web application built to create, read and manage Articles / Posts. 
App uses Medoo library for fast and simple Database requests.

## Routing

App is not based on standard routing library. I built my own router which is not-standard inside index file.
Index file requires ArticlesController class and depends on which adress or route has been required, calls adequate controller method.
Only routes operated by index file can be accessed. Any other routes provides user to 404 Page.

## Controller

There is only one Controller - ArticlesController and all the methods like create, show, delete, update are operated in this class.
I'm not very experienced engineeer but I thinks that's called RESTful Controller :)

