# Contributing to Those Eyes Login Page 🤝

First off, thank you for considering contributing to this project! It's people like you that make this login page such a beautiful piece of work.

## 📋 Table of Contents

- [Code of Conduct](#code-of-conduct)
- [How Can I Contribute?](#how-can-i-contribute)
- [Development Setup](#development-setup)
- [Style Guidelines](#style-guidelines)
- [Commit Guidelines](#commit-guidelines)
- [Pull Request Process](#pull-request-process)

## 📜 Code of Conduct

### Our Pledge

We are committed to providing a welcoming and inspiring community for all. Please be respectful and constructive in all interactions.

### Our Standards

**Positive behavior includes:**
- Using welcoming and inclusive language
- Being respectful of differing viewpoints
- Gracefully accepting constructive criticism
- Focusing on what is best for the community
- Showing empathy towards other community members

**Unacceptable behavior includes:**
- Harassment of any kind
- Trolling, insulting/derogatory comments
- Publishing others' private information
- Other conduct which could reasonably be considered inappropriate

## 🎯 How Can I Contribute?

### 🐛 Reporting Bugs

Before creating bug reports, please check existing issues to avoid duplicates.

**When filing a bug report, include:**
- Clear, descriptive title
- Steps to reproduce the behavior
- Expected behavior vs actual behavior
- Screenshots (if applicable)
- Browser and OS information
- Any error messages from console

**Example:**
```markdown
**Bug**: Password toggle icon doesn't work on Safari

**Steps to reproduce:**
1. Open page in Safari 14
2. Click the eye icon next to password field
3. Nothing happens

**Expected:** Password should toggle between visible/hidden
**Actual:** Icon doesn't respond to clicks

**Browser:** Safari 14.1.2 on macOS Big Sur
**Console errors:** None
```

### ✨ Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues.

**Include in your suggestion:**
- Clear, descriptive title
- Detailed description of the proposed functionality
- Why this enhancement would be useful
- Possible implementation approaches
- Mockups or examples (if applicable)

### 🔧 Your First Code Contribution

Unsure where to begin? Look for issues labeled:
- `good first issue` - Simple issues for beginners
- `help wanted` - Issues that need attention
- `enhancement` - New features to implement

### 💻 Pull Requests

1. Fork the repo and create your branch from `main`
2. Make your changes
3. Test thoroughly across different browsers
4. Update documentation if needed
5. Submit a pull request!

## 🛠 Development Setup

### Prerequisites

- A modern web browser (Chrome, Firefox, Safari, Edge)
- Text editor (VS Code, Sublime, Vim, etc.)
- Git

### Local Development

1. **Fork and clone**
   ```bash
   git clone https://github.com/YOUR-USERNAME/those-eyes-login.git
   cd those-eyes-login
   ```

2. **Create a branch**
   ```bash
   git checkout -b feature/your-feature-name
   # or
   git checkout -b fix/your-bug-fix
   ```

3. **Make your changes**
   - Edit the HTML file
   - Test in multiple browsers
   - Ensure responsive design works

4. **Test locally**
   ```bash
   # Option 1: Direct open
   open index.html
   
   # Option 2: Local server (recommended)
   python -m http.server 8000
   # or
   npx http-server
   ```

5. **Commit your changes**
   ```bash
   git add .
   git commit -m "feat: add your feature description"
   ```

6. **Push and create PR**
   ```bash
   git push origin feature/your-feature-name
   ```

## 🎨 Style Guidelines

### HTML

- Use semantic HTML5 elements
- Maintain proper indentation (2 spaces)
- Keep attributes in alphabetical order
- Use double quotes for attributes
- Add comments for complex sections

```html
<!-- Good -->
<label class="flex flex-col min-w-40 flex-1">
  <p class="text-white text-base font-medium leading-normal pb-2">Email</p>
  <input 
    class="form-input flex w-full..." 
    placeholder="Enter your email"
    type="email"
  />
</label>

<!-- Avoid -->
<label class='flex flex-col min-w-40 flex-1'><p class='text-white text-base font-medium leading-normal pb-2'>Email</p><input class='form-input flex w-full...' type=email placeholder='Enter your email'/></label>
```

### CSS / Tailwind

- Follow Tailwind utility-first approach
- Keep custom CSS minimal
- Use CSS variables for theme colors
- Document custom animations

```css
/* Good: Clear, documented custom CSS */
.btn-glow:hover {
    box-shadow: 0 0 15px 3px rgba(232, 48, 140, 0.4);
    transition: box-shadow 0.3s ease-in-out;
}

/* Avoid: Inline styles */
style="box-shadow: 0 0 15px 3px rgba(232, 48, 140, 0.4);"
```

### JavaScript (if adding)

- Use modern ES6+ syntax
- Add comments for complex logic
- Keep functions small and focused
- Handle errors gracefully

```javascript
// Good
const togglePasswordVisibility = (inputElement, iconElement) => {
  const isPassword = inputElement.type === 'password';
  inputElement.type = isPassword ? 'text' : 'password';
  iconElement.textContent = isPassword ? 'visibility' : 'visibility_off';
};

// Avoid
function toggle(i,e){i.type=i.type=='password'?'text':'password';e.textContent=i.type=='password'?'visibility_off':'visibility';}
```

### Accessibility

- Include proper ARIA labels
- Ensure keyboard navigation works
- Maintain proper contrast ratios
- Test with screen readers

```html
<!-- Good: Accessible form -->
<label for="email-input" class="...">
  Email
  <input 
    id="email-input"
    type="email"
    aria-label="Email address"
    aria-required="true"
  />
</label>
```

## 📝 Commit Guidelines

We follow [Conventional Commits](https://www.conventionalcommits.org/) for clear git history.

### Commit Message Format

```
<type>(<scope>): <subject>

<body>

<footer>
```

### Types

- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation changes
- `style`: Code style changes (formatting, no logic change)
- `refactor`: Code refactoring
- `perf`: Performance improvements
- `test`: Adding tests
- `chore`: Maintenance tasks

### Examples

```bash
# Feature
git commit -m "feat(auth): add password visibility toggle"

# Bug fix
git commit -m "fix(form): resolve Safari input focus issue"

# Documentation
git commit -m "docs(readme): update installation instructions"

# Style
git commit -m "style(form): improve input field spacing"
```

### Writing Good Commits

**Do:**
- Use present tense ("add feature" not "added feature")
- Use imperative mood ("move cursor to..." not "moves cursor to...")
- Keep first line under 72 characters
- Reference issues: `fix(auth): resolve login bug (closes #123)`

**Don't:**
- Write vague messages like "fix stuff" or "updates"
- Commit unrelated changes together
- Use past tense

## 🔄 Pull Request Process

### Before Submitting

- [ ] Test in Chrome, Firefox, Safari
- [ ] Test on mobile devices (or browser dev tools)
- [ ] Check console for errors
- [ ] Update README if needed
- [ ] Add screenshots for UI changes
- [ ] Verify all form inputs work
- [ ] Check accessibility (keyboard navigation, screen reader)

### PR Template

```markdown
## Description
Brief description of changes

## Type of Change
- [ ] Bug fix
- [ ] New feature
- [ ] Documentation update
- [ ] Style/UI improvement

## Testing
- [ ] Tested on Chrome
- [ ] Tested on Firefox
- [ ] Tested on Safari
- [ ] Tested on mobile
- [ ] Tested keyboard navigation

## Screenshots
(If applicable)

## Related Issues
Closes #(issue number)
```

### Review Process

1. **Automated checks** - Code will be automatically reviewed
2. **Maintainer review** - A maintainer will review your PR
3. **Feedback** - Address any requested changes
4. **Approval** - Once approved, your PR will be merged!

### After Your PR is Merged

- Delete your feature branch
- Update your fork
- Celebrate! 🎉

## 🏷 Issue Labels

| Label | Description |
|-------|-------------|
| `bug` | Something isn't working |
| `enhancement` | New feature request |
| `documentation` | Documentation improvements |
| `good first issue` | Good for newcomers |
| `help wanted` | Extra attention needed |
| `question` | Further information requested |
| `wontfix` | This will not be worked on |

## 💡 Tips for Contributors

### Quick Wins
- Fix typos in documentation
- Improve code comments
- Add browser compatibility notes
- Enhance error messages
- Improve accessibility

### Best Practices
- Test thoroughly before submitting
- Keep PRs focused and small
- Write clear commit messages
- Be responsive to feedback
- Update documentation

### Need Help?

- 💬 Open a [discussion](https://github.com/yourusername/those-eyes-login/discussions)
- 📧 Email the maintainers
- 💭 Comment on relevant issues

## 🌟 Recognition

Contributors will be added to our README. Thank you for making this project better!

## 📚 Additional Resources

- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [HTML Best Practices](https://github.com/hail2u/html-best-practices)
- [Web Accessibility Guide](https://www.w3.org/WAI/fundamentals/)
- [Conventional Commits](https://www.conventionalcommits.org/)

---

**Questions?** Feel free to open an issue or reach out to the maintainers.

**Happy Contributing! 🚀**
