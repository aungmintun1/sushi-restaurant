
# Sushi Restaurant Application

Allows the Admin to upload food categories and food items to the menu which will then be added to the website content for the menu page as well as the food categories slider. Admin can also manage employees, users, and reservations. People that visit the website can also put in their name and email for an offer. Admin is able to manage all categories,items, and users in the dashboard. In the Admin Dashboard, the Admin can see the total employees, customers, reservations, and total revenue. The Admin can also view the estimated daily revenue on a chart that related to the average order value of a customer eg. $27 * total customers for that specific day. 

### link to project: https://sushi-fushi-e0574261c06d.herokuapp.com/







![App Screenshot](https://aungmintun.netlify.app/assets/images/sushifushi.png)


## How It's Made:

### Tech used: HTML, CSS, Javascript, TailWind BootStrap, PHP, Laravel, MySql,

For this project I used PHP and Laravel for the backend and used MySql for the database. I also used the Blade templating engine in order to create the views for each page. For user authentication I installed Laravel Breeze.
For the Food Category Slider I used vanilla javascript to manipulate the how many pixels the slider would translate each time a button was clicked.

## Optimizations:

I would have liked to perhaps more to the overall design and aesthetics of the website, perhaps a gallery section in the home page displaying the food and the interior and exterior of the restaurant.

Displaying reviews people have left or testimonials.

## Lessons Learned:

DOM manipulation: I learned how to use a slider that translates in the x-axis based on the slider multiplier variable. Each time the button is clicked it would increment the slideMultiplier by 1 and then multiply by the width of the slide.

function updateSlider() {slidingSystem.style.transform = 
`translateX(-${slideMultiplier * slideWidth}px)`;
  }

CRUD: I learned how to create a model, set up migrations, how to set the controllers and routes in order to create, read, update and delete. I also learned how to implement forms in order for the user to set out these actions.
