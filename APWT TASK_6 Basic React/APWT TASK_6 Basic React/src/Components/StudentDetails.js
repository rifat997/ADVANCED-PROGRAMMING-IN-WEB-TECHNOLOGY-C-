import React, { useState } from 'react';
import { useParams } from 'react-router';
import NavBar from './NavBar';
import StudentData from './StudentData';

const StudentDetails = () => {

    const { id } = useParams();
    const [students, setStudents] = useState(StudentData);
    console.log(setStudents);
    console.log(id);
    const selectedStudent = students.find(students => students.id = id);
    return (
        <div>
            <NavBar />
            <div className="d-flex justify-content-center align-items-center" style={{ height: '90vh',  }}>
                <div style={{ boxShadow:"5px 5px 5px teal", padding: "30px", borderRadius: "15px", background:"lightblue" }}>
                    <h1>Student details</h1>
                    <h5>Name: {selectedStudent?.name}</h5>
                    <h5>Id: {selectedStudent?.studentId}</h5>
                    <h5> Department: {selectedStudent?.department}</h5>
                    <h5>CGPA: {selectedStudent?.cgpa}</h5>
                    <h5>  Address: {selectedStudent?.address}</h5>
                </div>
            </div>
        </div>
    );
};

export default StudentDetails;