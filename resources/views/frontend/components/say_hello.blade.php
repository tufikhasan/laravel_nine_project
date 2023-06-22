<section class="{{ $sayHelloSectionCss }}">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">07 - Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form</p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form method="post" action="{{ route('contact.us') }}">
                            <input type="text" placeholder="Enter name*" name="name" required>
                            <input type="email" placeholder="Enter mail*" name="email" required>
                            <input type="text" pattern="(\+880|0)[0-9]{10}" title="Please enter a valid phone number"
                                placeholder="015xxxxxxxx 0r +88015xxxxxxxx" name="subject" required>
                            <input type="hidden" name="budget" value="empty">
                            <textarea placeholder="Enter Massage*" name="message" required></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
