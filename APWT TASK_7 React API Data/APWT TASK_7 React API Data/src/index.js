import React from 'react';
import ReactDOM from 'react-dom/client';
import {BrowserRouter as Router,Route,Routes} from 'react-router-dom';

import './index.css';
import App from './App';
import Login from './Login';
import Admin_header from './Admin_header';
import Dashboard from './Dashboard';
import Registration from './Registration';
import reportWebVitals from './reportWebVitals';

import StudentRegistration from './StudentRegistration';
import StudentLogin from './StudentLogin';
import StudentDashboard from './StudentDashboard';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <Router>
      <Routes>
        <Route path="/" element={<Login/>}></Route>
        <Route path="/regis" element={<Registration/>}></Route>
        <Route path="/dashboard" element={<Dashboard/>}></Route>
        <Route path="/student/login" element={<StudentLogin/>}></Route>
        <Route path="/student/registration" element={<StudentRegistration/>}></Route>
        <Route path="/student/dashboard" element={<StudentDashboard/>}></Route>
      </Routes>
    </Router>
   
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
