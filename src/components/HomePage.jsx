import React from 'react';
import { Link } from 'react-router-dom';
import styled from 'styled-components';

const StyledHomePage = styled.div`
    
    padding: 20px;
    text-align: center;

    h1 {
        font-size: 2em;
        margin-bottom: 10px;
    }

    p {
        font-size: 1.2em;
        margin-bottom: 20px;
    }

    h2 {
        font-size: 1.5em;
        margin-bottom: 15px;
    }

    a {
        color: #61dafb;
        text-decoration: none;

        &:hover {
            text-decoration: underline;
        }
    }
`;

const HomePage = () => {
    return (
        <StyledHomePage>
            <img src="/images/se-logo.svg" alt="StackOverflow Logo" className="img-fluid radius-image-curve" />
            <div>
                <h1>Bienvenue sur StackOverflow Clone</h1>
                <p>
                    Un endroit où vous pouvez poser des questions et trouver des réponses.
                </p>
            </div>

            <div>
                <h2>Dernières Questions</h2>

            </div>

            <div>
                <h2>Dernières Réponses</h2>

            </div>

            <div>
                <Link to="/register">Register</Link>
                <span> | </span>
                <Link to="/login">Connect</Link>
            </div>
        </StyledHomePage>
    );
};

export default HomePage;
