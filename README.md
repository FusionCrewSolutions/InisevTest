PHP 8.1.6 on XAMPP is used
=========================================


-- DB ----------------------------------
DB Name: test;
No password;

Website----
id, webName, webDesc

AuthorPost----
id, postTitle, postDesc, autName, webID

Subcriber----
id, subName, subEmail

SubToWeb----(Insert some data manually)
subID, WebID

php artisan migrate:fresh --seed




-- END POINTS --------------------------
[USE THE ARTISAN SERVER + POSTMAN]

View posts:- http://127.0.0.1:8000/api/authorpost

----

Create post:- POST:http://127.0.0.1:8000/api/authorpost
Body:- raw -> JSON
    {
        "postTitle":"Test title",
        "postDesc":"asdf",
        "autName":"EnDee",
        "webID":"1"
    }
WebID should be an available ID (not validated)

----

Subscribe:- http://127.0.0.1:8000/api/subtoweb
Body:- raw -> JSON
    {
        "subID":"2",
        "WebID":"1"
    }
subID and WebID should be an available IDs (not validated)



=============================================================================================
== TASK TO DO ===============================================================================
----STARTED AT: 14 Aug 2022 07:05 PM-----

Create a simple subscription platform (only RESTful APIs with MySQL) in which users can subscribe to a website (there can be multiple websites in the system). 
Whenever a new post is published on a particular website, all it's subscribers shall receive an email with the post title and description in it. (no authentication of any kind is required)

MUST:-
- Use PHP 7.* or 8.*  [DONE]
- Write migrations for the required tables. [DONE]
- Endpoint to create a "post" for a "particular website". (posting an article????)  [DONE]
- Endpoint to make a user subscribe to a "particular website" with all the tiny validations included in it [DONE]
- Use of command to send email to the subscribers [Mail class is added but not completed]
- Use of queues to schedule sending in background [SendAllMailsController added but not used]
- No duplicate stories should get sent to subscribers.
- Deploy the code on a public github repository [DONE]

OPTIONAL:-
- Seeded data of the websites [DONE]
- Open API documentation (or) Postman collection demonstrating available APIs & their usage [DONE]
- Use of contracts & services.
- Use of caching wherever applicable.
- Use of events/listeners.

Note:- 
1. Please provide special instructions(if any) to make to code base run on our local/remote platform.
2. Only implement what is mentioned in brief, i.e. only the API, no front-end things etc. The codes will never be deployed, we just want to see your coding skills. 
3. There isn't a strict deadline. The faster the better, however code quality (and implementing it as mentioned in brief) is the most important. However, of course it shouldn't take more than a couple of hours. 
4. If anything isn't clear, just implement it according to your understanding. There won't be any further explanations, the task is clear. As long as what you do doesn't contradict the briefing, it's fine. 
