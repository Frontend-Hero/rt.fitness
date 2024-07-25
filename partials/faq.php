<section class="personal-training-faq accordion">
    <div class="wrapper">
        <h2 class="rt-text-center">Frequently Asked Questions</h2>
        
        <div class="grid">
            
            <div class="accordion-item active grid-span-12">
                <h3 class="accordion-title">What qualifications and certifications do you have?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>I’m a fully qualified Level 2 Fitness Instructor and Level 3 Personal Trainer</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">How much experience do you have working as a personal trainer?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>I opened my business is February 2024 however I've been training since my early 20's</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">What is your training philosophy or approach?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <ol>
                            <li>
                                <strong>Individualisation</strong>
                                Personalised Plans: Every client is unique, so I tailor training 
                                programs to their specific goals, fitness levels, 
                                medical history, and preferences.
                            </li>
                            <li style="margin-top: 15px;">
                                <strong>Adaptability</strong> 
                                Continuously adjust and refine workouts based on progress, feedback, 
                                and any changes in the client's condition or goals.</p>
                            </li>
                            <li style="margin-top: 15px;">
                                <strong>Education and Empowerment</strong>
                                Educate clients about the importance of exercise, nutrition, and overall wellness.
                                Equip clients with the knowledge and confidence to make healthier choices and to eventually maintain a healthy lifestyle independently.
                            </li>

                            <li style="margin-top: 15px;">
                                <strong>Balance</strong> 
                                Emphasize the importance of a balanced lifestyle that includes proper rest, stress management, and fun activities outside of the gym.
                            </li>

                            <li style="margin: 15px 0;">
                                <strong>Enjoyment and Variety</strong> 
                                Create enjoyable and engaging workout routines to keep clients motivated and reduce monotony.
                            </li>
                    </div>
                </div>
            </div>

            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">Do you have experience working with clients who have similar goals to mine?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Yes, I work with a diverse range of fitness clients who have goals that are very similar to yours. 
                        Whether you are looking to lose weight, build muscle, increase your endurance, or simply improve your overall 
                        health and wellness, your personalised training program is designed to meet your specific needs.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">How do you track and measure progress?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Two ways. (With permission) I take progress photos periodically to visually document changes in your physique.
                        I also gather feedback on how the client feels physically and mentally, their energy levels, and their motivation.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">What types of exercises will be included in my program?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Short answer is it depends. It all centers around you, and what your goals are. For example, if you are looking to 
                        increase your strength, we will concentrate a lot more on weights.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">How will you tailor the program to meet my specific needs and goals?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Content...</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">What is your availability and how do you handle scheduling sessions?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Content...</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">What is the cost of your services and are there any package deals available?</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Content...</p>
                    </div>
                </div>
            </div>
           
        </div>
        
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionTitles = document.querySelectorAll('.accordion-title');

    accordionTitles.forEach(title => {
        title.addEventListener('click', function() {
            const accordionItem = title.parentElement;

            // Check if currently clicked item is open
            const isCurrentlyOpen = accordionItem.classList.contains('active');

            // Close all sections
            document.querySelectorAll('.accordion-item').forEach(item => {
                item.classList.remove('active');
            });

            // If the clicked item was not open before, open it now
            if (!isCurrentlyOpen) {
                accordionItem.classList.add('active');
            }
        });
    });
});
</script>