# IRIS DEVELOPMENT ROADMAP

---

## PHASE 0 – FOUNDATION (SETUP)

**Database Setup**
- Create database  
  HOW: Import `database/create_database.sql` in phpMyAdmin

- Create users + recovery tables  
  HOW:  
  - Import `database/users_table.sql`  
  - Add `email` + `secret_code` fields  
  - Import `database/password_resets_table.sql`

**Core System**
- Setup `core/config.php`  
  HOW: Connect to MySQL (mysqli/PDO) + use `.env` for credentials

- Setup `core/functions.php`  
  HOW: Add `clean()`, `redirect()`, `isLoggedIn()` + `session_start()`

- Setup `core/helpers.php`  
  HOW: Add reusable helper functions

- Setup `core/response.php`  
  HOW: Handle standardized JSON responses

**Authentication System**
- Setup auth handlers  
  FILES:  
  - `auth/login_handler.php`  
  - `auth/register_handler.php`  
  - `auth/logout.php`  
  - `auth/check_session.php`  
  HOW: Move all login/register logic here; keep UI pages in `pages/login.php` & `pages/register.php` only

- Build `pages/register.php` (UI only)  
  HOW: Form with username, email, password, secret_code → action `auth/register_handler.php`

- Build `pages/login.php` (UI only)  
  HOW: Form with username + password → action `auth/login_handler.php`

**Forgot / Reset System**
- Setup forgot system  
  FILES:  
  - `pages/forgot_password.php`  
  - `pages/forgot_username.php`  
  - `auth/forgot_password_handler.php`  
  - `auth/forgot_username_handler.php`  
  - `auth/reset_code_handler.php`  
  HOW: Verify using secret_code OR email; generate OTP → store in `password_resets_table`

- Setup email system (optional)  
  FILES:  
  - `mail/send_email.php`  
  - `pages/verify_code.php`  
  - `pages/reset_password.php`  
  HOW: Send OTP via PHPMailer → verify → allow reset

**Upload System**
- Setup uploads  
  FILES:  
  - `api/upload_api.php`  
  - `js/upload.js`  
  - `uploads/profile/`, `uploads/items/`, `uploads/food/`, `uploads/vehicle_icons/`  
  HOW: Implement drag-and-drop → test file storage + retrieval

**Testing**
- HOW: Register → Login → Redirect to `pages/index.php`; test forgot/reset; test file uploads

---

## PHASE 1 – MAP + STATUS (CORE FEATURE)

- Protect `index.php`  
  HOW: Include `middleware/auth_middleware.php`

- Create `pages/index.php` as main map page

- Setup `js/map.js`  
  HOW: Initialize map (Leaflet or Google Maps)

- Setup `css/map.css`  
  HOW: Fullscreen map (height: 100vh)

- Create user status API  
  FILE: `api/user_status_api.php`  
  HOW: CRUD operations (add, fetch)

- Create statuses table  
  HOW: Import `database/user_status_table.sql`

- Add status form  
  HOW: Send via fetch → `api/user_status_api.php`

- Show markers on map  
  HOW: Fetch statuses → loop → display with popups

---

## PHASE 2 – SOCIAL FEATURES

- Import tables  
  `database/chats_table.sql`  
  `database/friends_table.sql`  
  `database/posts_table.sql`

- Create APIs  
  - `api/chat_api.php`  
  - `api/posts_api.php`

- Build chat page  
  FILE: `pages/chat.php`  
  HOW: Display messages UI

- Setup `js/chat.js`  
  HOW: Send messages + auto-refresh (later WebSocket)

- Add likes + comments  
  HOW: Extend `api/user_status_api.php` / `api/posts_api.php`

- Add friend system  
  HOW: Store relationships in database

---

## PHASE 3 – MARKETPLACE

- Import items table  
  `database/items_table.sql`

- Create items API  
  FILE: `api/items_api.php`

- Setup frontend  
  `js/market.js` + `css/market.css`

- Add item upload  
  HOW: Store images in `uploads/items/`

- Display items, wishlist, basic checkout  
  HOW: Test upload → view → wishlist → checkout flows

---

## PHASE 4 – FOOD MODULE

- Import tables  
  `database/food_items_table.sql`  
  `database/food_orders_table.sql`

- Create API  
  FILE: `api/food_api.php`

- Build food pages (modules/food/)  
  - `food_market.php`  
  - `food_item.php`  
  - `food_cart.php`  
  - `food_checkout.php`  
  - `food_order_history.php`

- Setup frontend  
  `js/food.js` + `css/food.css`  
  HOW: Test adding to cart, checkout, order history

---

## PHASE 5 – DELIVERY SYSTEM

- Import tables  
  `database/riders_table.sql`  
  `database/delivery_orders_table.sql`

- Create APIs  
  - `api/delivery_api.php`  
  - `api/rider_location_api.php`

- Build pages (modules/delivery/)  
  - `delivery_rider.php`  
  - `delivery_tracking.php`

- Implement tracking  
  HOW: Update + fetch rider location in real-time

---

## PHASE 6 – COMMUTE SYSTEM

- Import table  
  `database/commute_vehicles_table.sql`

- Create API  
  `api/commute_api.php`

- Build commute page: `modules/commute/commute_map.php`

- Setup `js/commute.js`  
  HOW: Add ETA calculation (distance ÷ speed) → display vehicle routes

- Test commute system

---

## PHASE 7 – REAL-TIME SYSTEM

- Setup WebSocket server  
  FILE: `realtime/server.js`

- Connect modules: `chat.js`, `map.js`, `delivery.js`, `commute.js`

- Replace polling with real-time updates

- Test WebSocket connections

---

## PHASE 8 – NOTIFICATIONS

- Import table  
  `database/notifications_table.sql`

- Create API  
  `api/notifications_api.php`

- Setup frontend: `js/notifications.js`

- Add alerts: messages, orders, delivery

- Test notifications

---

## PHASE 9 – MONETIZATION

- Add commission system  
  HOW: Modify `api/items_api.php`

- Add delivery fees, promoted listings, subscriptions

- Test monetization features

---

## PHASE 10 – ADVANCED FEATURES

- Map enhancements: heatmaps, clustering (`js/map.js`)

- Expand admin panel (`pages/admin.php`)  
  HOW: Manage users, reports, data overview

- Add analytics tracking

---

## PHASE 11 – AI (OPTIONAL)

- Use AI scripts:  
  - `ai/recommendation.py`  
  - `ai/fraud_detection.py`  
  - `ai/route_optimizer.py`

- Connect via API or `exec()`

- Add smart suggestions, route optimization, fraud detection

- Test AI features

---

## PHASE 12 – FUTURE FEATURES

- Add AR / 3D maps

- Add facial recognition

- Explore blockchain integration  
  HOW: External APIs / libraries