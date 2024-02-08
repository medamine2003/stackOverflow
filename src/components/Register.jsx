import { useState } from 'react';
import { Form, Button } from 'react-bootstrap';


const Register = () => {
    const [formData, setFormData] = useState({
        lastName: '',
        firstName: '',
        username: '',
        password: '',
        email: '',
        role: '',
        status: 'Member',
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData((prevData) => ({
            ...prevData,
            [name]: value,
        }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        // Ajoutez ici la logique pour soumettre le formulaire (par exemple, envoyez les données au backend)
        console.log('Form submitted:', formData);
    };

    return (
        <Form onSubmit={handleSubmit}>
            <Form.Group controlId="lastName">
                <Form.Label>Last Name</Form.Label>
                <Form.Control type="text" name="lastName" onChange={handleChange} />
            </Form.Group>

            <Form.Group controlId="firstName">
                <Form.Label>First Name</Form.Label>
                <Form.Control type="text" name="firstName" onChange={handleChange} />
            </Form.Group>

            <Form.Group controlId="username">
                <Form.Label>Username</Form.Label>
                <Form.Control type="text" name="username" onChange={handleChange} />
            </Form.Group>

            <Form.Group controlId="password">
                <Form.Label>Password</Form.Label>
                <Form.Control type="text" name="password" onChange={handleChange} />
            </Form.Group>

            <Form.Group controlId="email">
                <Form.Label>Email</Form.Label>
                <Form.Control type="text" name="email" onChange={handleChange} />
            </Form.Group>

            <Form.Group controlId="role">
                <Form.Label>Role</Form.Label>
                <Form.Control type="text" name="role" onChange={handleChange} />
            </Form.Group>

            <Form.Group controlId="status">
                <Form.Label>Status</Form.Label>
                <Form.Select name="status" onChange={handleChange} value={formData.status}>
                    <option value="Member">Member</option>
                    <option value="Moderator">Moderator</option>
                </Form.Select>
            </Form.Group>
            {/* Ajoutez d'autres champs ici (username, password, email, role, status) de la même manière */}

            <Button variant="primary" type="submit">
                Register
            </Button>
        </Form>
    );
};

export default Register;
