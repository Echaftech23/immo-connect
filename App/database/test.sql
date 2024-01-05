-- Insert data into roles table
INSERT INTO roles (id, name) VALUES
(1, 'Admin'),
(2, 'Agent'),
(3, 'User');

-- Insert data into locations table
INSERT INTO locations (id, region, city, avenue) VALUES
(1, 'North', 'City1', 'Avenue A'),
(2, 'South', 'City2', 'Avenue B'),
(3, 'East', 'City3', 'Avenue C');

-- Insert data into types table
INSERT INTO types (id, name) VALUES
(1, 'Apartment'),
(2, 'House'),
(3, 'Commercial');

-- Insert data into users table
INSERT INTO users (id, username, email, password, image, phone, rate, status, isLogin, location_id, role_id) VALUES
(1, 'admin_user', 'admin@example.com', 'admin_password', 'admin.jpg', '123456789', 4.5, 'Active', true, 1, 1),
(2, 'agent_user', 'agent@example.com', 'agent_password', 'agent.jpg', '987654321', 4.2, 'Active', true, 2, 2),
(3, 'regular_user', 'user@example.com', 'user_password', 'user.jpg', '456789123', 4.0, 'Active', true, 3, 3);

-- Insert data into immobiliers table
INSERT INTO immobiliers (id, title, description, price, image1, image2, image3, image4, image5, status, rooms, flooring_type, bathrooms, location_id, type_id) VALUES
(1, 'Apartment 1', 'Cozy apartment in the city center', 120000, 'apt1_1.jpg', 'apt1_2.jpg', 'apt1_3.jpg', 'apt1_4.jpg', 'apt1_5.jpg', 'Active', 2, 'Tile', 1, 1, 1),
(2, 'House 1', 'Spacious family house with garden', 300000, 'house1_1.jpg', 'house1_2.jpg', 'house1_3.jpg', 'house1_4.jpg', 'house1_5.jpg', 'Active', 4, 'Wood', 2, 2, 2);

-- Insert data into messages table
INSERT INTO messages (id, content, datePublication, status, receiver_id, sender_id) VALUES
(1, 'Hello, how can I help you?', '2024-01-02 12:30:00', 'Unread', 2, 3),
(2, 'Interested in the apartment!', '2024-01-03 14:45:00', 'Unread', 1, 3);

-- Insert data into commentaires table
INSERT INTO commentaires (id, content, image, datePublication, user_id, immobilier_id) VALUES
(1, 'Great apartment!', 'comment1.jpg', '2024-01-05 10:00:00', 3, 1),
(2, 'Love the garden!', 'comment2.jpg', '2024-01-06 11:30:00', 3, 2);

-- Insert data into transactions table
INSERT INTO transactions (id, details, user_id, immobilier_id) VALUES
(1, 'Sale completed', 3, 1),
(2, 'Rental agreement signed', 3, 2);

-- Insert data into saved table
INSERT INTO saved (user_id, immobilier_id) VALUES
(3, 1),
(3, 2);

