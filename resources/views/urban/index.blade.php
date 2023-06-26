<x-layout>
    <x-flash-message />
    <section>
      <header>
        <h1><a href="#" class="logo">Urban Couture</a></h1>
        <div class="navigation">
          @auth
          <ul style="display: flex;">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="/urban/item">Items</a></li>
            {{-- <li><a href="/urban/logout">Logout</a></li> --}}
            <li>
              <form action="/urban/logout" method="post">
                @csrf
              <button type="submit">Logout</button></form>
            </li>
          </ul>
          @else
          <a href="/urban/login">Login</a>
          @endauth
        </div>
      </header>
      <div class="content">
        <div class="info">
          <h2>Welcome to our website <br><span>Be Creative!</span></h2>
          <p> We are thrilled to have you here. Whether you're a returning visitor or a first-time guest, we extend our warmest greetings and invite you to explore all that our website has to offer.
             At Urban Couture, we are passionate about providing exceptional experiences and delivering valuable information to our online community. Through this platform, we aim to create a space where you can connect, learn, and engage with our products, services, and resources.
             Discover a wealth of knowledge, browse our wide range of products, or delve into our insightful articles. We have designed this website with you in mind, striving to make your journey enjoyable and user-friendly. Feel free to navigate through the various sections, and if you have any questions or need assistance, our dedicated support team is just a click away.
             As we continue to grow and innovate, we value your feedback and input. Your experience is of utmost importance to us, and we are committed to providing you with the best possible online experience. We encourage you to share your thoughts, suggestions, or any ideas that can help us serve you better.
            Thank you for choosing to visit our website. We hope you have a wonderful time exploring and engaging with our content. We look forward to being a part of your journey and providing you with valuable resources that meet your needs.</p>

        </div>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </section>
</x-layout>