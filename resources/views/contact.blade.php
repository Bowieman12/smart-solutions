<x-layouts.app title="Contact">
    <div class="contact-form">
        <h1>Contact</h1>
        <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>
        
        <form action="#" method="POST">
            <div>
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="subject">Onderwerp</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div>
                <label for="message">Tekst</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Verstuur</button>
        </form>
    </div>
</x-layouts.app>
