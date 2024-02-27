

# Teorijas jautajumi 

- Kas ir API?
- Kā deklarēt mainīgo PHP valodā?
- Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
- Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
- Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
    username VARCHAR(255)
    email VARCHAR(255)
    password VARCHAR(255)
    rating DECIMAL(8, 2)
    created_at TIMESTAMP
    updated_at TIMESTAMP

1. API (Application Programming Interface) is a set of rules that allows software applications to communicate with each other. APIs enable different programms to request and exchange information.

Real-life example of an API:
You can think of an API as a waiter in a restaurant who listens to your order request, goes to the chef, takes the food items ordered and gets back to you with the order.

2. $variableName = 'value';

3. MVC architecture (Model, View, Controller)

MVC is an architectural pattern consisting of three parts: Model, View, Controller. Model: Handles data logic. View: It displays the information from the model to the user. Controller: It controls the data flow into a model object and updates the view whenever data changes.

4. Object-relational mapping (ORM) is a way to align programming code with database structures.
Put another way, you can see the ORM as the layer that connects OOP to relational databases.

It is faster, simpler, less errors

5. $usersWithRatingGreaterThan4 = User::where('rating', '>', 4)->get();

