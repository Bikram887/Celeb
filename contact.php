<!doctype html>
<html lang="en">

<head>

  <title>Home | Tring</title>
  <?php include "include/header.php" ?>


  <div class="container py-5">
    <div class="row g-4">
      <!-- Left Column -->
      <div class="col-lg-5">
        <img src="assets/images/contactus.png" alt="Team collaboration" class="contact-image" />

        <h2 class="other-contact">OTHER WAYS TO REACH OUT</h2>
        <a href="tel:98765 43210" class="email-link">
          <i class="fa-solid fa-phone"></i> +91 98765 43210
        </a>
        <a href="mailto:contact@example.com" class="email-link">
          <i class="fa-solid fa-envelope"></i> new@example.com
        </a>
        <a href="mailto:contact@example.com" class="email-link">
          <i class="fa-solid fa-location-dot"></i> Plot No - 167, Near, Kalyan Mandap St, Saheed Nagar, Bhubaneswar,
          Odisha 751007
        </a>
      </div>

      <!-- Right Column -->
      <div class="col-lg-7">
        <div class="card">
          <div class="contact-label">CONTACT</div>
          <h1 class="contact-heading">Let's get to work</h1>

          <form>
            <!-- First Row: Name and Mobile Number -->
            <div class="row mb-3">
              <div class="col-md-6 mb-3">
                <label for="fullName" class="form-label">Full Name*</label>
                <input type="text" class="form-control" id="fullName" placeholder="John Smith" required />
              </div>

              <div class="col-md-6 mb-3">
                <label for="city" class="form-label">City*</label>
                <input type="text" class="form-control" id="city" placeholder="City" required />
              </div>

              <div class="col-md-6 mb-3">
                <label for="mobileNumber" class="form-label">Mobile Number*</label>
                <input type="number" class="form-control no-arrow" id="mobileNumber" placeholder="+91 0000000000"
                  required />
              </div>

              <!-- Second Row: Email and Job Title -->
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email id*</label>
                <input type="email" class="form-control" id="email" placeholder="name@email.com" required />
              </div>
              <div class="col-md-6 mb-3">
                <label for="jobTitle" class="form-label">Job title*</label>
                <input type="text" class="form-control" id="jobTitle" placeholder="Manager" required />
              </div>

              <!-- Third Row: Company Name -->
              <div class="col-md-6 mb-3">
                <label for="companyName" class="form-label">Company name / brand website*</label>
                <input type="text" class="form-control" id="companyName" placeholder="Company Name" required />
              </div>
              <div class="col-md-6 mb-3">
                <label for="product" class="form-label">Select the product</label>
                <select class="form-select" id="product">
                  <option selected disabled>Select</option>
                  <option>Product A</option>
                  <option>Product B</option>
                  <option>Product C</option>
                </select>
              </div>

              <!-- Fourth Row: City and How did you find us? -->

              <div class="col-md-6 mb-3">
                <label for="findUs" class="form-label">How did you find us?*</label>
                <select class="form-select" id="findUs" required>
                  <option selected disabled>Select</option>
                  <option>Google</option>
                  <option>Social Media</option>
                  <option>Referral</option>
                  <option>Other</option>
                </select>
              </div>
            </div>

            <!-- Sixth Row: Budget Selection
            <div class="mb-3">
              <label class="form-label">What's your budget?</label>
              <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-outline-secondary" onclick="selectBudget(this)">
                  ₹50K~
                </button>
                <button type="button" class="btn btn-outline-secondary" onclick="selectBudget(this)">
                  ₹50K-₹1L
                </button>
                <button type="button" class="btn btn-outline-secondary" onclick="selectBudget(this)">
                  ₹1L-₹5L
                </button>
                <button type="button" class="btn btn-outline-secondary" onclick="selectBudget(this)">
                  ₹5L-₹25L
                </button>
                <button type="button" class="btn btn-outline-secondary" onclick="selectBudget(this)">
                  ₹25L+
                </button>
              </div>
            </div> -->

            <!-- Message Box -->
            <div class="mb-3">
              <label for="message" class="form-label">Your Message*</label>
              <textarea class="form-control-msg" id="message" rows="4" placeholder="Type your message here..." maxlength="1000" required></textarea>

             </div>

            <!-- Terms and Conditions Consent -->
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms" required />
                <label class="form-check-label" for="terms">
                I allow New Beginning to communicate with me with advice, tips, and other promotions
                  <!-- <a href="terms.html" class="terms-link">terms and conditions</a> -->
                </label>
              </div>
            </div>

            <!-- Marketing Consent -->
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="communication" />
                <label class="form-check-label" for="communication">
                I have read and agree to the terms and conditions.
                </label>
              </div>
            </div>

            <!-- Submit Button -->
            
            <button class="btn btn-primary"> Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function selectBudget(button) {
      // Remove 'active' class from all buttons
      document.querySelectorAll(".btn-outline-secondary").forEach((btn) => {
        btn.classList.remove("active");
      });

      // Add 'active' class to the clicked button
      button.classList.add("active");
    }

    // Set default active button on page load
    document.addEventListener("DOMContentLoaded", () => {
      const defaultButton = document.querySelector(".btn-outline-secondary");
      if (defaultButton) {
        defaultButton.classList.add("active");
      }

      // Add form submit event listener
      const form = document.querySelector("form");
      form.addEventListener("submit", function (event) {
        const termsCheckbox = document.getElementById("terms");
        const communicationCheckbox =
          document.getElementById("communication");

        // Check if both checkboxes are checked
        if (!termsCheckbox.checked || !communicationCheckbox.checked) {
          event.preventDefault(); // Prevent form submission
          alert(
            "Please agree to the terms and conditions and the marketing communications before submitting."
          ); // Show alert
        }
      });
    });
  </script>
  <?php include "include/footer.php" ?>