<style>
    .footer-item-down {
  padding: 10px; /* Add padding for spacing */
}

@media (min-width: 1024px) {
  .footer-item-down {
    width: 25%; /* Four columns on large screens */
  }
}

@media (min-width: 640px) and (max-width: 1023px) {
  .footer-item-down {
    width: 50%; /* Two columns on medium screens */
  }
}

@media (max-width: 639px) {
  .footer-item-down {
    width: 100%; /* One column on small screens */
  }
}

</style>
<div class="container mx-auto w-[95%] sm:w-[85%] flex flex-wrap justify-between items-center">
    <div class="footer-item-down w-full lg:w-1/4 md:w-1/2 sm:w-full text-center sm:text-left">
      &copy; {{ config('app.name') }} RWANDA, V1. {{ date('Y') }}
    </div>
    <div class="footer-item-down w-full lg:w-1/4 md:w-1/2 sm:w-full text-center sm:text-left">
      <h2>Privacy</h2>
    </div>
    <div class="footer-item-down w-full lg:w-1/4 md:w-1/2 sm:w-full text-center sm:text-left">
      <h2>Help</h2>
    </div>
    <div class="footer-item-down w-full lg:w-1/4 md:w-1/2 sm:w-full text-center sm:text-left">
      <h2>Terms</h2>
    </div>
  </div>
  