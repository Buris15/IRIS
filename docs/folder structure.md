# IRIS Project Folder Structure

## core
- `config.php`
- `functions.php`
- `helpers.php`
- `database.php` *(NEW – DB connection centralized)*
- `response.php` *(NEW – API JSON responses)*

## api
- `chat_api.php`
- `commute_api.php`
- `delivery_api.php`
- `food_api.php`
- `items_api.php`
- `rider_location_api.php`
- `posts_api.php`
- `user_status_api.php`
- `users_api.php`
- `notifications_api.php`
- `auth_api.php`
- `upload_api.php` *(NEW – drag-drop uploads)*

## auth
- `login_handler.php`
- `register_handler.php`
- `logout.php`
- `check_session.php`
- `forgot_password_handler.php`
- `forgot_username_handler.php`
- `reset_code_handler.php`

## middleware
- `auth_middleware.php`
- `admin_middleware.php`
- `rate_limit.php` *(NEW – basic security)*

## realtime
- `server.js`
- `socket_events.js` *(NEW – chat, notifications)*

## ai
- `recommendation.py`
- `fraud_detection.py`
- `route_optimizer.py` *(NEW – commute/delivery AI)*

## mail
- `send_email.php`
- templates/
  - `reset_password.html`
  - `verification_code.html`

## assets
- icons/
- fonts/
- images/
- animations/ *(NEW – UI smooth effects)*

## uploads
- profile/
- items/
- food/
- vehicle_icons/
- posts/ *(NEW – social feature)*

## pages
- `admin.php`
- `home.php`
- `dashboard.php`
- `support.php`
- `chat.php`
- `login.php`
- `register.php`
- `forgot_password.php`
- `forgot_username.php`
- `verify_code.php`
- `reset_password.php`
- `profile.php` *(NEW – user profile UI)*

## modules
### commute
- `commute_map.php`
- `commute_routes.php` *(NEW)*

### delivery
- `delivery_rider.php`
- `delivery_tracking.php`
- `delivery_orders.php` *(NEW)*

### food
- `food_cart.php`
- `food_checkout.php`
- `food_item.php`
- `food_market.php`
- `food_order_history.php`

### social *(NEW – “easy features”)*
- `posts.php`
- `comments.php`
- `likes.php`
- `feed.php`

## css
- `admin.css`
- `chat.css`
- `commute.css`
- `delivery.css`
- `food.css`
- `map.css`
- `market.css`
- `post.css`
- `style.css`
- `support.css`
- `darkmode.css` *(NEW)*

## js
- `admin.js`
- `chat.js`
- `commute.js`
- `delivery.js`
- `food.js`
- `main.js`
- `map.js`
- `market.js`
- `post.js`
- `user_status.js`
- `support.js`
- `notifications.js`
- `darkmode.js` *(NEW)*
- `upload.js` *(NEW – drag & drop)*
- `animations.js` *(NEW)*

## database
- `create_database.sql`
- `users_table.sql`
- `posts_table.sql`
- `user_status_table.sql`
- `chats_table.sql`
- `friends_table.sql`
- `items_table.sql`
- `food_items_table.sql`
- `food_orders_table.sql`
- `delivery_orders_table.sql`
- `riders_table.sql`
- `commute_vehicles_table.sql`
- `notifications_table.sql`
- `password_resets_table.sql`
- `seed_data.sql`

## logs
- `error.log`
- `activity.log`

## docs
- `features.md`
- `folder_structure.md`

## root files
- `index.php`
- `.env`
- `.htaccess`
- `README.md`