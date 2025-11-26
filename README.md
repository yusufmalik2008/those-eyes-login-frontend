# those-eyes-login-frontend
# Those Eyes - Login Page 🎵

A romantic, dreamy login page inspired by the song "Those Eyes" by New West. Features a warm, nostalgic design with smooth animations and modern UI/UX patterns.

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=flat&logo=html5&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=flat&logo=tailwind-css&logoColor=white)

## ✨ Features

- 🌅 **Warm Gradient Background** - Animated sunset-inspired color palette
- 🔮 **Glassmorphism Design** - Modern frosted glass effects
- ✅ **Form Validation Ready** - Pre-structured for easy validation integration
- 📱 **Fully Responsive** - Works seamlessly on desktop, tablet, and mobile
- 🎨 **Dark Theme** - Eye-comfortable dark mode design
- 🔐 **Social Login Options** - Google and Facebook integration ready
- ⚡ **Smooth Animations** - Gentle hover effects and transitions
- 🎯 **Accessibility Focused** - Semantic HTML and ARIA-ready

## 🎨 Design Theme

Inspired by the intimate, nostalgic feeling of "Those Eyes" by New West:
- **Colors**: Deep purples, warm pinks, and romantic magentas
- **Typography**: Plus Jakarta Sans for modern elegance
- **Atmosphere**: Dreamy, warm, and inviting
- **Interactions**: Soft glows and gentle animations

## 🚀 Quick Start

### Prerequisites

None! This is a pure HTML file using CDN resources. Just need a modern web browser.

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/those-eyes-login.git
   cd those-eyes-login
   ```

2. **Open in browser**
   ```bash
   # Simply open the HTML file
   open index.html
   # or double-click the file
   ```

3. **Or serve with a local server** (optional)
   ```bash
   # Using Python
   python -m http.server 8000
   
   # Using Node.js (http-server)
   npx http-server
   
   # Using PHP
   php -S localhost:8000
   ```

   Then visit `http://localhost:8000`

## 📁 Project Structure

```
those-eyes-login/
├── index.html          # Main login page
├── README.md           # Project documentation
├── CONTRIBUTING.md     # Contribution guidelines
├── LICENSE            # MIT License
└── assets/            # (Optional) Additional assets
    └── screenshots/   # Project screenshots
```

## 🎯 Usage

### Basic Implementation

The form is ready to use. Just add your backend logic:

```javascript
// Example: Add form submission handler
const form = document.querySelector('form');
form.addEventListener('submit', async (e) => {
  e.preventDefault();
  const email = document.querySelector('input[type="email"]').value;
  const password = document.querySelector('input[type="password"]').value;
  
  // Your authentication logic here
  console.log('Login attempt:', { email, password });
});
```

### Customization

**Change Colors:**
```javascript
// In the Tailwind config section
tailwind.config = {
  theme: {
    extend: {
      colors: {
        "primary": "#your-color",        // Main accent color
        "background-dark": "#your-bg",   // Dark background
      },
    },
  },
}
```

**Toggle Password Visibility:**
```javascript
const togglePassword = document.querySelector('.material-symbols-outlined');
const passwordInput = document.querySelector('input[type="password"]');

togglePassword.addEventListener('click', () => {
  const type = passwordInput.type === 'password' ? 'text' : 'password';
  passwordInput.type = type;
  togglePassword.textContent = type === 'password' ? 'visibility_off' : 'visibility';
});
```

## 🔧 Technologies Used

- **HTML5** - Semantic markup
- **Tailwind CSS** (via CDN) - Utility-first styling
- **Google Fonts** - Plus Jakarta Sans typography
- **Material Symbols** - Icon system
- **Pure CSS Animations** - Gradient animations

## 📱 Browser Support

- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🎨 Color Palette

| Color | Hex | Usage |
|-------|-----|-------|
| Primary | `#e8308c` | Buttons, links, accents |
| Background Dark | `#211119` | Main background |
| Border | `#533c47` | Input borders |
| Text Light | `#b89dab` | Secondary text |
| Card Background | `#261c21` | Input fields, cards |

## 🤝 Contributing

Contributions are welcome! Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

## 📝 To-Do / Roadmap

- [ ] Add form validation logic
- [ ] Implement backend authentication
- [ ] Add "Sign Up" page
- [ ] Create "Forgot Password" flow
- [ ] Add loading states
- [ ] Implement error handling UI
- [ ] Add unit tests
- [ ] Create light mode variant
- [ ] Add more social login options (Apple, Twitter)
- [ ] Internationalization (i18n) support

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- Inspired by **"Those Eyes" by New West** 🎵
- Design patterns from modern authentication UIs
- Tailwind CSS community for utility classes
- Material Design for icon system

## 📧 Contact

Have questions or suggestions? Feel free to reach out!

- GitHub Issues: [Create an issue](https://github.com/yourusername/those-eyes-login/issues)
- Email: your.email@example.com

## 🌟 Show Your Support

If you like this project, please give it a ⭐️ on GitHub!

---

**Made with 💖 and inspired by those eyes that captivate the soul**
