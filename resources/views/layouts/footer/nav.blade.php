<footer class="footer">
    <div class="container @auth-fluid @endauth">
        <nav>
            {{-- <ul class="footer-menu">
                <li>
                    <a href="/" class="nav-link" target="_blank">Home Page</a>
                </li>
            </ul> --}}
            <p class="copyright text-center">
                © Copyright
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="/">TANAGER</a> {{ __(', made with love') }}
            </p>
        </nav>
    </div>
</footer>
