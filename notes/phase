PHASE 0 – FOUNDATION (SETUP)

- Create database
  HOW: Import sql/create_database.sql in phpMyAdmin

- Create users + recovery tables
  HOW:
  - Import sql/users_table.sql
  - Add email + secret_code fields
  - Import sql/password_resets_table.sql

- Setup config.php
  HOW: Connect to MySQL (mysqli/PDO) + use .env for credentials

- Create functions.php
  HOW: Add clean(), redirect(), isLoggedIn()

- Setup auth system (IMPORTANT)
  FILES:
  - auth/login_handler.php
  - auth/register_handler.php
  - auth/logout.php
  - auth/check_session.php
  HOW:
  - Move all login/register logic here
  - Keep login.php & register.php as UI only

- Build register.php (UI only)
  HOW:
  - Form: username, email, password, secret_code
  - Form action → auth/register_handler.php

- Build login.php (UI only)
  HOW:
  - Form: username + password
  - Form action → auth/login_handler.php

- Add session handling
  HOW:
  - session_start() in functions.php
  - Store user_id in $_SESSION

- Setup forgot system (NEW)
  FILES:
  - forgot_password.php (UI)
  - forgot_username.php (UI)
  - auth/forgot_password_handler.php
  - auth/forgot_username_handler.php
  HOW:
  - Verify using secret_code OR email

- Setup email system (OPTIONAL but IMPORTANT)
  FILES:
  - mail/send_email.php
  - verify_code.php
  - reset_password.php
  HOW:
  - Generate OTP → store in password_resets_table
  - Send via PHPMailer
  - Verify → allow reset

- Test system
  HOW:
  - Register → Login → Redirect to index.php
  - Test forgot password (secret code)
  - Test email reset (if implemented)


PHASE 1 – MAP + STATUS (CORE FEATURE)
- Protect index.php
  HOW: Use middleware/auth_middleware.php

- Create index.php
  HOW: Main page with map container

- Setup map.js
  HOW: Initialize map (Leaflet or Google Maps)

- Setup map.css
  HOW: Fullscreen map (height: 100vh)

- Create status API
  FILE: api/status.php
  HOW: CRUD (add + fetch)

- Create statuses table
  HOW: Import sql/statuses_table.sql

- Add status form
  HOW: Send via fetch → api/status.php

- Show markers
  HOW: Fetch → loop → display on map



PHASE 2 – SOCIAL FEATURES
- Import tables
  sql/chats_table.sql
  sql/friends_table.sql

- Create chat API
  FILE: api/chat.php

- Build chat.php
  HOW: Message UI

- Setup chat.js
  HOW: Send + auto-refresh (later WebSocket)

- Add likes + comments
  HOW: Extend api/status.php

- Add friend system
  HOW: Store relationships in DB



PHASE 3 – MARKETPLACE
- Import items table
  sql/items_table.sql

- Create items API
  FILE: api/items_api.php

- Setup market.js + market.css

- Add item upload
  HOW: Store images in upload/items/

- Display items
- Add wishlist
- Add checkout (basic)



PHASE 4 – FOOD MODULE
- Import tables
  sql/food_items_table.sql
  sql/food_orders_table.sql

- Create API
  FILE: api/food_api.php

- Build pages
  food_market.php
  food_item.php
  food_cart.php
  food_checkout.php
  food_order_history.php

- Setup food.js + food.css



PHASE 5 – DELIVERY SYSTEM
- Import tables
  sql/riders_table.sql
  sql/delivery_orders_table.sql

- Create APIs
  api/delivery_api.php
  api/rider_location_api.php

- Build pages
  delivery_rider.php
  delivery_tracking.php

- Implement tracking
  HOW: Update + fetch rider location



PHASE 6 – COMMUTE SYSTEM
- Import table
  sql/commute_vehicles_table.sql

- Create API
  api/commute_api.php

- Build commute_map.php
- Setup commute.js
- Add ETA
  HOW: distance ÷ speed



PHASE 7 – REAL-TIME SYSTEM
- Setup WebSocket server
  FILE: realtime/server.js

- Connect:
  chat.js
  map.js
  delivery.js
  commute.js

- Replace polling with real-time updates



PHASE 8 – NOTIFICATIONS
- Import table
  sql/notifications_table.sql

- Create API
  api/notifications_api.php

- Setup notifications.js

- Add alerts:
  messages, orders, delivery



PHASE 9 – MONETIZATION
- Add commission system
  HOW: Modify items_api.php

- Add delivery fee
- Add promoted listings
- Add subscription system



PHASE 10 – ADVANCED FEATURES
- Add heatmaps (map.js)
- Add clustering (map.js)

- Expand admin.php
  HOW: Manage users, reports, data

- Add analytics tracking



PHASE 11 – AI (OPTIONAL)
- Use ai/
  recommendation.py
  fraud_detection.py

- Connect via API or exec()
- Add smart suggestions



PHASE 12 – FUTURE FEATURES
- Add AR / 3D map
- Add facial recognition
- Add blockchain
HOW: External APIs / libraries