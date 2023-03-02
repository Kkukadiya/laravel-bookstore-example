Laravel + Vue Book Store 

clone this repo and execute below command 

composer install 

set database name in .env file and set configuration accordingly.

Execute below command 

php artisan migrate 
php artisan db:seed

install package dependencies using below command 

npm install 
and run 

npm run dev


go to terminal and run below command to serve 

php artisan serve 

http://127.0.0.1:8000/


User Credentials 
  
Email    :  user@gmail.com
Password :  Thinker@99


Admin Credentials 

Email    :  admin@gmail.com
Password :  Thinker@99

Login api :

1) Api name : http://127.0.0.1:8000/api/login

Api Type : POST 

Response :  

Failed response 

{
    "success": false,
    "message": "Unautorised"
}

Success Response :

{
    "success": true,
    "message": "User login successfully"
}



2) http://127.0.0.1:8000/api/books?page=1&search=

Type : GET

{
    "userInfo": {
        "id": 1,
        "name": "admin",
        "email": "admin@gmail.com",
        "email_verified_at": null,
        "role_id": 1,
        "created_at": "2023-02-28T09:40:26.000000Z",
        "updated_at": "2023-02-28T09:40:50.000000Z"
    },
    "total": 2007,
    "to": 100,
    "prev_page_url": null,
    "per_page": 100,
    "path": "http://127.0.0.1:8000/api/books",
    "next_page_url": "http://127.0.0.1:8000/api/books?page=2",
    "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=2",
            "label": "2",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=3",
            "label": "3",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=4",
            "label": "4",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=5",
            "label": "5",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=6",
            "label": "6",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=7",
            "label": "7",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=8",
            "label": "8",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=9",
            "label": "9",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=10",
            "label": "10",
            "active": false
        },
        {
            "url": null,
            "label": "...",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=20",
            "label": "20",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=21",
            "label": "21",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/books?page=2",
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "last_page_url": "http://127.0.0.1:8000/api/books?page=21",
    "last_page": 21,
    "from": 1,
    "first_page_url": "http://127.0.0.1:8000/api/books?page=1",
    "data": [
        {
            "id": 1,
            "name": "rem",
            "author": "Joe Nolan",
            "genre": "fiction",
            "isbn": "labore",
            "publication_date": "2019-09-27",
            "description": "Ullam eos doloribus culpa esse vel delectus.",
            "image": "20230228120451.jpeg",
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T15:13:08.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "officiis",
            "author": "Prof. Pietro Hickle",
            "genre": "nonfiction",
            "isbn": "natus",
            "publication_date": null,
            "description": "Vero cum iusto exercitationem a eum ipsam nisi.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T12:19:43.000000Z",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "dolorem",
            "author": "Arturo Adams",
            "genre": "nonfiction",
            "isbn": "voluptate",
            "publication_date": null,
            "description": "Ut dolorem qui maxime facilis et est est.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "consequatur",
            "author": "Darrin Gerhold",
            "genre": "nonfiction",
            "isbn": "iusto",
            "publication_date": null,
            "description": "Vitae libero ut eveniet porro.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "magnam",
            "author": "Dr. Polly Braun II",
            "genre": "nonfiction",
            "isbn": "sint",
            "publication_date": null,
            "description": "Aut dolores cum porro est.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "cum",
            "author": "Marlin Conroy",
            "genre": "fiction",
            "isbn": "blanditiis",
            "publication_date": null,
            "description": "Perspiciatis ut perferendis ut illo pariatur a.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "nam",
            "author": "Prof. Scotty Wolf",
            "genre": "fiction",
            "isbn": "id",
            "publication_date": null,
            "description": "Id ut odio itaque veniam aut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "aut",
            "author": "Norris Kris",
            "genre": "nonfiction",
            "isbn": "itaque",
            "publication_date": null,
            "description": "Ut aut doloribus porro.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "ipsa",
            "author": "Reagan Dare",
            "genre": "fiction",
            "isbn": "aperiam",
            "publication_date": null,
            "description": "Est facere aut commodi maxime voluptates eaque.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "illo",
            "author": "Callie Kuhn",
            "genre": "nonfiction",
            "isbn": "autem",
            "publication_date": null,
            "description": "Id nulla consequatur ut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "rerum",
            "author": "Tyrese Swift",
            "genre": "nonfiction",
            "isbn": "eveniet",
            "publication_date": null,
            "description": "Aliquid eum itaque sed in qui.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 12,
            "name": "ea",
            "author": "Marian Stark",
            "genre": "nonfiction",
            "isbn": "consequatur",
            "publication_date": null,
            "description": "Nobis ut in et quo error error.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 13,
            "name": "doloremque",
            "author": "America Rath II",
            "genre": "fiction",
            "isbn": "dolorum",
            "publication_date": null,
            "description": "Id esse placeat neque.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 14,
            "name": "dolorem",
            "author": "Gage Emard",
            "genre": "fiction",
            "isbn": "quaerat",
            "publication_date": null,
            "description": "Aut et sit quia et unde quas tempore dolor.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 15,
            "name": "nobis",
            "author": "Alisha Mosciski",
            "genre": "nonfiction",
            "isbn": "occaecati",
            "publication_date": null,
            "description": "Aut nemo vero repellat rem autem sunt.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 16,
            "name": "quibusdam",
            "author": "Edyth McCullough",
            "genre": "nonfiction",
            "isbn": "nobis",
            "publication_date": null,
            "description": "Officia consequuntur sed sapiente esse aut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 17,
            "name": "et",
            "author": "Mrs. Cordie Champlin",
            "genre": "fiction",
            "isbn": "nihil",
            "publication_date": null,
            "description": "Voluptas voluptas optio sit quia quas sunt.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 18,
            "name": "sit",
            "author": "Mattie Goldner DVM",
            "genre": "fiction",
            "isbn": "voluptatem",
            "publication_date": null,
            "description": "Optio optio et id delectus iusto inventore et.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 19,
            "name": "sequi",
            "author": "Dr. Eleanora Lockman III",
            "genre": "fiction",
            "isbn": "facere",
            "publication_date": null,
            "description": "Nihil saepe voluptas ullam quia cum et.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 20,
            "name": "ut",
            "author": "Pete Hills",
            "genre": "fiction",
            "isbn": "quo",
            "publication_date": null,
            "description": "Voluptatem fugit beatae et consequatur ut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 21,
            "name": "omnis",
            "author": "Miss Ericka West",
            "genre": "fiction",
            "isbn": "et",
            "publication_date": null,
            "description": "Laudantium ea maxime accusantium qui rerum.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 22,
            "name": "ad",
            "author": "Jaycee Konopelski V",
            "genre": "nonfiction",
            "isbn": "reiciendis",
            "publication_date": null,
            "description": "Ab rerum distinctio iure sint.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 23,
            "name": "fugiat",
            "author": "Prof. Cielo Russel",
            "genre": "fiction",
            "isbn": "in",
            "publication_date": null,
            "description": "Consectetur atque quia quia dolor et.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 24,
            "name": "magni",
            "author": "Ike Volkman PhD",
            "genre": "fiction",
            "isbn": "eos",
            "publication_date": null,
            "description": "Impedit dolore quas sint repellat delectus.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 25,
            "name": "et",
            "author": "Alexandria Murazik",
            "genre": "fiction",
            "isbn": "libero",
            "publication_date": null,
            "description": "Quod rem et laudantium et earum non voluptate.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 26,
            "name": "voluptatem",
            "author": "Prof. Freddy Luettgen I",
            "genre": "fiction",
            "isbn": "consequuntur",
            "publication_date": null,
            "description": "Omnis dolore veniam praesentium quaerat quos.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 27,
            "name": "est",
            "author": "Arielle Beier",
            "genre": "nonfiction",
            "isbn": "ex",
            "publication_date": "2019-10-24",
            "description": "Ut quidem ducimus exercitationem corporis eum.",
            "image": "20230228151414.jpeg",
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T15:21:10.000000Z",
            "deleted_at": null
        },
        {
            "id": 28,
            "name": "sunt",
            "author": "Warren Robel",
            "genre": "nonfiction",
            "isbn": "cum",
            "publication_date": null,
            "description": "Maxime ratione maxime eius sed recusandae.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 29,
            "name": "sed",
            "author": "Ludie Rau",
            "genre": "fiction",
            "isbn": "minima",
            "publication_date": null,
            "description": "Nihil dolor autem culpa aperiam fugit.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 30,
            "name": "est",
            "author": "Tyra Runolfsson I",
            "genre": "nonfiction",
            "isbn": "officiis",
            "publication_date": null,
            "description": "Aut explicabo voluptas molestiae.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 31,
            "name": "cumque",
            "author": "Ms. Jailyn Armstrong",
            "genre": "nonfiction",
            "isbn": "tempore",
            "publication_date": null,
            "description": "Itaque saepe inventore et aut laboriosam aut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 32,
            "name": "quisquam",
            "author": "Kole Lesch Sr.",
            "genre": "nonfiction",
            "isbn": "repellendus",
            "publication_date": null,
            "description": "Cum excepturi vitae nemo quibusdam eum in magnam.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 33,
            "name": "accusamus",
            "author": "Napoleon Schaefer",
            "genre": "fiction",
            "isbn": "ipsa",
            "publication_date": null,
            "description": "Qui omnis quia iste esse.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 34,
            "name": "impedit",
            "author": "Elinor Abernathy",
            "genre": "nonfiction",
            "isbn": "repellendus",
            "publication_date": null,
            "description": "Quam quia maxime est sint saepe sint.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 35,
            "name": "numquam",
            "author": "Prof. Kaleigh Cronin III",
            "genre": "fiction",
            "isbn": "illo",
            "publication_date": null,
            "description": "Ut deleniti veniam beatae adipisci ullam.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 36,
            "name": "maxime",
            "author": "Ms. Camilla Volkman",
            "genre": "nonfiction",
            "isbn": "ratione",
            "publication_date": null,
            "description": "Placeat vitae perspiciatis quae pariatur illum.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 37,
            "name": "voluptatum",
            "author": "Tremayne Harvey DVM",
            "genre": "nonfiction",
            "isbn": "unde",
            "publication_date": null,
            "description": "Nobis corporis commodi illo cumque.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 38,
            "name": "deserunt",
            "author": "Mr. Israel Wiza PhD",
            "genre": "fiction",
            "isbn": "sunt",
            "publication_date": null,
            "description": "Repellat corporis dolore nihil sit quaerat et.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 39,
            "name": "voluptatibus",
            "author": "Dr. Stacy Braun",
            "genre": "fiction",
            "isbn": "numquam",
            "publication_date": null,
            "description": "Odio officia suscipit esse ducimus aliquid est.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 40,
            "name": "repudiandae",
            "author": "Kennedy Wiegand",
            "genre": "fiction",
            "isbn": "vitae",
            "publication_date": null,
            "description": "Iusto ipsam et officia debitis.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 41,
            "name": "rerum",
            "author": "Dolly Ernser",
            "genre": "nonfiction",
            "isbn": "praesentium",
            "publication_date": null,
            "description": "Iusto est quibusdam enim necessitatibus.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 42,
            "name": "quae",
            "author": "Miss Eloisa Ebert",
            "genre": "fiction",
            "isbn": "dicta",
            "publication_date": null,
            "description": "Laboriosam sed voluptas nihil soluta aut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 43,
            "name": "minus",
            "author": "Miss Cayla Stehr III",
            "genre": "nonfiction",
            "isbn": "unde",
            "publication_date": null,
            "description": "Dignissimos dolorem reiciendis nihil ipsum.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 44,
            "name": "ut",
            "author": "Maddison Mann",
            "genre": "nonfiction",
            "isbn": "inventore",
            "publication_date": null,
            "description": "Sunt quia beatae soluta et voluptatum.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 45,
            "name": "quia",
            "author": "Jadyn Monahan I",
            "genre": "fiction",
            "isbn": "fugiat",
            "publication_date": null,
            "description": "Id ea enim ipsum dolor.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 46,
            "name": "ex",
            "author": "Aliya Gerhold",
            "genre": "nonfiction",
            "isbn": "quaerat",
            "publication_date": null,
            "description": "Corporis consequatur et ipsa.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 47,
            "name": "beatae",
            "author": "Gunnar Steuber",
            "genre": "fiction",
            "isbn": "itaque",
            "publication_date": null,
            "description": "At ad facere facilis.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 48,
            "name": "vel",
            "author": "Jerrell Berge",
            "genre": "fiction",
            "isbn": "aut",
            "publication_date": null,
            "description": "Recusandae ut sed qui.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 49,
            "name": "aut",
            "author": "Julien Bechtelar",
            "genre": "nonfiction",
            "isbn": "tempora",
            "publication_date": null,
            "description": "Eos consequatur rerum voluptatibus in vitae.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 50,
            "name": "iusto",
            "author": "Leilani Sipes",
            "genre": "nonfiction",
            "isbn": "qui",
            "publication_date": null,
            "description": "Officia nihil enim voluptas a in.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 51,
            "name": "numquam",
            "author": "Hilton Fisher V",
            "genre": "fiction",
            "isbn": "nostrum",
            "publication_date": null,
            "description": "Autem facilis facilis qui numquam.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 52,
            "name": "aliquam",
            "author": "Dannie Raynor",
            "genre": "nonfiction",
            "isbn": "sit",
            "publication_date": null,
            "description": "Ut eaque voluptas et quae.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 53,
            "name": "quo",
            "author": "Cheyenne Becker",
            "genre": "nonfiction",
            "isbn": "repellat",
            "publication_date": null,
            "description": "Aut omnis possimus voluptatem odit rem molestiae.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 54,
            "name": "sed",
            "author": "Mr. Edmond Fadel",
            "genre": "fiction",
            "isbn": "sapiente",
            "publication_date": null,
            "description": "Velit quia eveniet culpa velit.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 55,
            "name": "et",
            "author": "Leanne Zboncak",
            "genre": "fiction",
            "isbn": "neque",
            "publication_date": null,
            "description": "Qui accusamus nihil repellat.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 56,
            "name": "mollitia",
            "author": "Adelia Lehner MD",
            "genre": "nonfiction",
            "isbn": "eum",
            "publication_date": null,
            "description": "Nihil nostrum fugit sit ut ut ipsam.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 57,
            "name": "nulla",
            "author": "Christy Spinka",
            "genre": "nonfiction",
            "isbn": "recusandae",
            "publication_date": null,
            "description": "Beatae velit laudantium provident ab alias.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 58,
            "name": "et",
            "author": "Jeffry Marquardt",
            "genre": "nonfiction",
            "isbn": "unde",
            "publication_date": null,
            "description": "Quia accusantium et quasi reprehenderit earum.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 59,
            "name": "itaque",
            "author": "River Pacocha",
            "genre": "fiction",
            "isbn": "pariatur",
            "publication_date": null,
            "description": "Sunt nobis reiciendis magnam.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 60,
            "name": "accusamus",
            "author": "Fae Christiansen Sr.",
            "genre": "nonfiction",
            "isbn": "vel",
            "publication_date": null,
            "description": "Molestias minima in corporis et libero.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 61,
            "name": "qui",
            "author": "Mr. Waldo Collins",
            "genre": "fiction",
            "isbn": "consequuntur",
            "publication_date": null,
            "description": "Qui aut cumque unde aut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 62,
            "name": "non",
            "author": "Margie Lemke",
            "genre": "nonfiction",
            "isbn": "illum",
            "publication_date": null,
            "description": "Nisi et illum sint sunt voluptatem.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 63,
            "name": "et",
            "author": "Gudrun Gleason",
            "genre": "nonfiction",
            "isbn": "saepe",
            "publication_date": null,
            "description": "Reiciendis labore ea quaerat sunt earum quasi ea.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 64,
            "name": "commodi",
            "author": "Reymundo Vandervort DVM",
            "genre": "fiction",
            "isbn": "et",
            "publication_date": null,
            "description": "Aut sit quis voluptatem ipsam enim excepturi.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 65,
            "name": "consequuntur",
            "author": "Dr. Aglae Parker",
            "genre": "fiction",
            "isbn": "in",
            "publication_date": null,
            "description": "Minima consequuntur praesentium est a.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 66,
            "name": "eum",
            "author": "Dr. Kyler Zulauf",
            "genre": "nonfiction",
            "isbn": "ut",
            "publication_date": null,
            "description": "Sunt blanditiis ut quia neque cumque.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 67,
            "name": "vel",
            "author": "Prof. Gabrielle Rutherford I",
            "genre": "fiction",
            "isbn": "saepe",
            "publication_date": null,
            "description": "Sunt ut corrupti quae et in ut id.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 68,
            "name": "praesentium",
            "author": "Barney Casper Sr.",
            "genre": "fiction",
            "isbn": "laboriosam",
            "publication_date": null,
            "description": "Quam laudantium dolor facilis natus cum iste.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 69,
            "name": "ut",
            "author": "Nikita Gulgowski",
            "genre": "nonfiction",
            "isbn": "animi",
            "publication_date": null,
            "description": "A minima numquam totam quidem quos.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 70,
            "name": "autem",
            "author": "Dr. Hank Bosco DDS",
            "genre": "fiction",
            "isbn": "ut",
            "publication_date": null,
            "description": "Necessitatibus vero numquam necessitatibus saepe.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 71,
            "name": "est",
            "author": "Mr. Matteo Treutel",
            "genre": "fiction",
            "isbn": "non",
            "publication_date": null,
            "description": "Dignissimos culpa minima consequatur et vitae.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 72,
            "name": "cum",
            "author": "Prof. Jefferey Stamm",
            "genre": "nonfiction",
            "isbn": "minima",
            "publication_date": null,
            "description": "Harum nulla qui et velit eveniet rerum ducimus.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 73,
            "name": "qui",
            "author": "Rowland Welch",
            "genre": "nonfiction",
            "isbn": "quae",
            "publication_date": null,
            "description": "Sequi voluptate optio excepturi et eaque velit.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 74,
            "name": "aut",
            "author": "Rick Grant IV",
            "genre": "fiction",
            "isbn": "explicabo",
            "publication_date": null,
            "description": "Repellat et qui aut corporis.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 75,
            "name": "ut",
            "author": "Golden Gutmann V",
            "genre": "nonfiction",
            "isbn": "non",
            "publication_date": null,
            "description": "Nam cum aut sint corporis magni rerum.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 76,
            "name": "pariatur",
            "author": "Stevie Stark",
            "genre": "nonfiction",
            "isbn": "libero",
            "publication_date": null,
            "description": "Assumenda velit nulla non veritatis.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 77,
            "name": "soluta",
            "author": "Flo Wintheiser",
            "genre": "fiction",
            "isbn": "dolorem",
            "publication_date": null,
            "description": "Et repellat nobis consequatur provident.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 78,
            "name": "nesciunt",
            "author": "Shanna McClure Sr.",
            "genre": "fiction",
            "isbn": "dolor",
            "publication_date": null,
            "description": "Veniam harum architecto saepe omnis.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 79,
            "name": "consectetur",
            "author": "Trycia Price",
            "genre": "fiction",
            "isbn": "cumque",
            "publication_date": null,
            "description": "Quas exercitationem dolore provident aliquid.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 80,
            "name": "alias",
            "author": "Julius Effertz",
            "genre": "fiction",
            "isbn": "at",
            "publication_date": null,
            "description": "Quo quis consequatur rerum vitae laborum eveniet.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 81,
            "name": "aut",
            "author": "Mrs. Tamara McGlynn PhD",
            "genre": "nonfiction",
            "isbn": "omnis",
            "publication_date": null,
            "description": "Voluptas maiores consequatur dignissimos sed ab.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 82,
            "name": "autem",
            "author": "Sim Metz",
            "genre": "nonfiction",
            "isbn": "voluptate",
            "publication_date": null,
            "description": "Saepe eos sapiente nam rerum eveniet quam maxime.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 83,
            "name": "aut",
            "author": "Boyd Muller",
            "genre": "fiction",
            "isbn": "ex",
            "publication_date": null,
            "description": "Est praesentium nisi minima et veniam aut.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 84,
            "name": "alias",
            "author": "Prof. Korey Murazik V",
            "genre": "fiction",
            "isbn": "consequatur",
            "publication_date": null,
            "description": "In perspiciatis sit odit.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 85,
            "name": "libero",
            "author": "Julien Pollich",
            "genre": "nonfiction",
            "isbn": "consequuntur",
            "publication_date": null,
            "description": "Quaerat id illo omnis officia.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 86,
            "name": "magnam",
            "author": "Katelyn Dicki",
            "genre": "nonfiction",
            "isbn": "id",
            "publication_date": null,
            "description": "Ea ut porro unde.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 87,
            "name": "error",
            "author": "Tiara Wyman",
            "genre": "fiction",
            "isbn": "enim",
            "publication_date": null,
            "description": "Ut temporibus et odio voluptatibus ad rerum esse.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 88,
            "name": "aut",
            "author": "Mary Dach",
            "genre": "nonfiction",
            "isbn": "et",
            "publication_date": null,
            "description": "Doloribus aut sit in laudantium enim.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 89,
            "name": "quis",
            "author": "Mrs. Gabriella Prohaska",
            "genre": "fiction",
            "isbn": "aliquam",
            "publication_date": null,
            "description": "Quis exercitationem excepturi ad perspiciatis.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 90,
            "name": "autem",
            "author": "Dora Bosco",
            "genre": "nonfiction",
            "isbn": "aut",
            "publication_date": null,
            "description": "Soluta rerum et itaque quo. Sequi et ea at.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 91,
            "name": "fugiat",
            "author": "Dr. Brook Schumm DVM",
            "genre": "nonfiction",
            "isbn": "sint",
            "publication_date": null,
            "description": "Id et veniam hic harum sed ipsam. Aut et quo ab.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 92,
            "name": "molestiae",
            "author": "Jana Rowe",
            "genre": "fiction",
            "isbn": "magnam",
            "publication_date": null,
            "description": "Minima non quaerat et mollitia.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 93,
            "name": "modi",
            "author": "Sonya Hackett",
            "genre": "fiction",
            "isbn": "sit",
            "publication_date": null,
            "description": "Veritatis ipsum et ullam sint dolorum nisi.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 94,
            "name": "aut",
            "author": "Ms. Talia Schaden",
            "genre": "fiction",
            "isbn": "dicta",
            "publication_date": null,
            "description": "Dolores ullam enim sint adipisci minus est in.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 95,
            "name": "autem",
            "author": "Guy Stracke DVM",
            "genre": "nonfiction",
            "isbn": "soluta",
            "publication_date": null,
            "description": "Vero asperiores consequatur sit.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 96,
            "name": "iusto",
            "author": "Miller Muller",
            "genre": "fiction",
            "isbn": "modi",
            "publication_date": null,
            "description": "Dolores doloremque consequuntur omnis quae sed.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 97,
            "name": "nam",
            "author": "Trever Will",
            "genre": "fiction",
            "isbn": "enim",
            "publication_date": null,
            "description": "Ducimus sit consectetur sed.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 98,
            "name": "minus",
            "author": "Ms. Helen Heidenreich",
            "genre": "fiction",
            "isbn": "consequatur",
            "publication_date": "2019-09-13",
            "description": "Odit animi nulla modi dolorem.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T15:13:30.000000Z",
            "deleted_at": null
        },
        {
            "id": 99,
            "name": "nobis",
            "author": "Sydnie Oberbrunner",
            "genre": "fiction",
            "isbn": "aut",
            "publication_date": null,
            "description": "Sequi unde molestiae sapiente eius iure.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 100,
            "name": "perspiciatis",
            "author": "Bonita Barton",
            "genre": "fiction",
            "isbn": "nihil",
            "publication_date": null,
            "description": "Consequatur eum necessitatibus consequatur illum.",
            "image": null,
            "created_at": "2023-02-28T09:40:26.000000Z",
            "updated_at": "2023-02-28T09:40:26.000000Z",
            "deleted_at": null
        }
    ],
    "current_page": 1
}

pass the search keyword in search parameters and it will filter the data based on title, author, genre, isbn and pass the page parameter to access the next page data.


3) http://127.0.0.1:8000/api/books/edit/{id}
Type : GET
Sample response :  

{
    "id": 1,
    "name": "rem",
    "author": "Joe Nolan",
    "genre": "fiction",
    "isbn": "labore",
    "publication_date": "2019-09-27",
    "description": "Ullam eos doloribus culpa esse vel delectus.",
    "image": "20230228120451.jpeg",
    "created_at": "2023-02-28T09:40:26.000000Z",
    "updated_at": "2023-02-28T15:13:08.000000Z",
    "deleted_at": null
}


4)  http://127.0.0.1:8000/api/books/update/1

Type : POST

params : 
            name: rem
            description: Ullam eos doloribus culpa esse vel delectus.
            author: Joe Nolan
            genre: fiction
            isbn: labore
            file: 
            publication_date: 2019-09-27

Sample Response :  
                {
                 "success": "Book has been update successfully"
                 }



5) http://127.0.0.1:8000/api/books/delete/1

Type : DELETE

Sample Response :  
                {"success":"Book has been deleted successfully"}
