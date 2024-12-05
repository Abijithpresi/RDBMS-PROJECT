
<footer id="footer">
    <div id="footer-content">
        <p>
            Developers: 
            <a href="#" target="_blank">Abijith S</a> 
            <a href="#" target="_blank">Jerin Shimji Varghese</a>
        </p>
    </div>
</footer>

<style>
    /* General Footer Styling */
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: linear-gradient(90deg, #0f2027, #203a43, #2c5364); /* Elegant Gradient */
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        padding: 20px 0;
        text-align: center;
        box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.3); /* Subtle shadow for depth */
        z-index: 1000;
    }

    /* Footer Content Styling */
    #footer-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 8px; /* Adds spacing between elements */
    }

    footer p {
        margin: 0;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 0.5px;
        color: #f1f1f1;
    }

    /* Footer Links */
    footer a {
        color: #ffd700; /* Golden color for premium touch */
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        padding: 5px 15px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    footer a:hover {
        background: rgba(255, 215, 0, 0.1); /* Golden hover effect */
        color: #ffffff; /* Change to white for better contrast */
        box-shadow: 0 4px 10px rgba(255, 215, 0, 0.5); /* Highlighted glow effect */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        footer {
            font-size: 13px;
            padding: 15px 0;
        }

        footer p {
            font-size: 14px;
        }

        footer a {
            font-size: 13px;
            padding: 5px 10px;
        }
    }
</style>

<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
 </body>
</html>
