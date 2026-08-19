# POS Dashboard with Role-Based Access Control

## Overview
This project is a frontend-only React + Tailwind CSS POS and inventory dashboard. It simulates authentication, permissions, and mock data using React state and localStorage. There is no backend, no API, and no database yet.

## 1. Folder structure

### Root
- PROJECT_DOCUMENTATION.md: explains the project for learning and mentoring.

### frontend/
- package.json: contains React, Vite, Tailwind, and app scripts.
- index.html: the main HTML page for Vite.
- tailwind.config.js: Tailwind configuration and theme colors.
- postcss.config.js: PostCSS setup for Tailwind.

### frontend/src/
- App.jsx: root React component that renders the router.
- main.jsx: mounts the app into the DOM.
- index.css: global Tailwind styles.

### frontend/src/components/
- Button.jsx: reusable button component.
- Card.jsx: reusable card container.
- Input.jsx: reusable form input component.
- Navbar.jsx: top navigation bar.
- Sidebar.jsx: role-based navigation menu.
- ProtectedRoute.jsx: route guard for RBAC.
- RoleBadge.jsx: shows the current role.
- Modal.jsx: reusable modal dialog.
- Table.jsx: reusable table layout.
- index.js: central export file for shared components.

### frontend/src/pages/
- Login.jsx: login page with mock authentication.
- Register.jsx: registration page with mock account creation.
- Dashboard.jsx: main dashboard page.
- Products.jsx: product inventory page.
- Suppliers.jsx: supplier records page.
- Users.jsx: user list page.
- Roles.jsx: role overview page.
- Permissions.jsx: permission explanation page.
- Pos.jsx: POS-like screen.
- Settings.jsx: settings page.
- Unauthorized.jsx: 403 page.
- index.js: page exports.

### frontend/src/layouts/
- MainLayout.jsx: shared layout with sidebar and navbar.

### frontend/src/router/
- index.jsx: all React Router routes and protected routes.

### frontend/src/services/
- authService.js: mock login, register, logout, and storage logic.
- mockData.js: mock products, suppliers, roles, users, and dashboard data.
- index.js: service exports.

### frontend/src/context/
- AuthContext.jsx: global authentication state using Context API.

### frontend/src/hooks/
- useAuth.js: custom hook to access auth context.

### frontend/src/utils/
- permissions.js: role definitions and navigation rules.

## 2. Why each file exists
- Components are reusable so the UI stays clean and consistent.
- Pages hold the main screens of the app.
- Layouts keep the page structure consistent.
- Router controls navigation and protection.
- Services hold mock data and auth logic.
- Context stores current user state globally.
- Utils centralize RBAC rules.

## 3. How React Router works
React Router is used to switch between pages without refreshing the browser.
- BrowserRouter provides the routing system.
- Routes contains all route definitions.
- Route maps a URL path to a component.
- Navigate redirects users to another page.

## 4. How Protected Routes work
Protected routes prevent users from visiting pages without permission.
- The app checks whether the current user exists.
- If the user is missing, the app redirects to login.
- If the user has no allowed role, the app redirects to the unauthorized page.
- This is handled by the ProtectedRoute component.

## 5. How role-based permissions work
The app uses mock roles:
- Admin: can access everything.
- Supplier: can see dashboard, suppliers, and view products.
- Cashier: can see dashboard, POS, and view products.

Permissions are defined in the utils file and used by:
- Sidebar navigation
- Route protection
- Action visibility on the products page

## 6. How reusable components work
Reusable components reduce repetition.
- Button handles button styles.
- Input handles form fields.
- Card gives a consistent container.
- Table displays tabular data.
- Modal can be used later for dialogs.
- Navbar and Sidebar create layout consistency.

## 7. How Tailwind is organized
Tailwind is used for styling in a utility-first way.
- index.css imports Tailwind base, components, and utilities.
- tailwind.config.js extends the theme with a custom primary color.
- Each component uses small utility classes to create modern spacing, typography, shadows, and colors.

## 8. React concepts used
- Component-based architecture
- JSX
- Props
- State with useState
- Effect handling with useEffect is not heavily necessary here, but the app uses React hooks clearly
- Context API for global auth state
- React Router for navigation
- Conditional rendering
- Reusable components

## 9. Which files will later connect to the backend
These files are prepared to connect later:
- frontend/src/services/authService.js: will become an API-based auth service.
- frontend/src/services/mockData.js: will be replaced by API responses.
- frontend/src/pages/Products.jsx: later connect to a product API.
- frontend/src/pages/Suppliers.jsx: later connect to a supplier API.
- frontend/src/pages/Users.jsx: later connect to a user API.
- frontend/src/pages/Pos.jsx: later connect to sales and checkout APIs.

## How to Explain This Project to My Mentor

### 30-second explanation
This is a frontend-only POS and inventory dashboard built with React and Tailwind CSS. It includes mock authentication, role-based access control, and a professional admin-style layout. The sidebar and pages change based on the logged-in role, and protected routes prevent unauthorized access.

### 2-minute explanation
I built a mock POS dashboard that looks like a real admin system, but everything is currently frontend-only. I used React Router to create multiple pages, Context API to store the current user, and localStorage to simulate login sessions. The app shows how an admin, supplier, and cashier would each see different navigation options and actions. I also created reusable UI components so the code stays clean and easy to maintain.

### Folder structure explanation
The app is organized into components, pages, layouts, router, services, context, hooks, and utils. Components are shared UI pieces. Pages are the main screens. Router handles navigation. Services contain mock data and authentication logic. Context gives the app global user state.

### React concepts used
I used reusable components, props, state, hooks, Context API, and routing. These are core React ideas that are important for building modern web applications.

### Tailwind concepts used
I used Tailwind utility classes for layout, spacing, colors, borders, shadows, and responsiveness. Tailwind helps keep styling fast and consistent.

### RBAC explanation
RBAC means role-based access control. Different users get different access. Admin can access everything, supplier gets limited access, and cashier gets checkout-focused access. The app shows this through the sidebar, routes, and hidden actions.

### Why reusable components are important
Reusable components save time and reduce duplication. If you build a button, table, or card once and use it across the app, your code stays cleaner and easier to manage.

### How this frontend will later connect with a backend
This frontend is ready for future backend integration. The services layer is the place where mock data will be replaced with real API calls. Later, login and product data can connect to a real server, but the current version remains fully frontend-based.

### Common interview questions with answers
- What is React Router used for? It is used to navigate between pages without refreshing the browser.
- What is Context API? It provides shared state across the app without passing props everywhere.
- What is RBAC? It is a way to control what different users can see and do.
- Why are reusable components helpful? They reduce duplication and make the app easier to maintain.
- Why use Tailwind CSS? It speeds up styling and keeps the UI consistent.
