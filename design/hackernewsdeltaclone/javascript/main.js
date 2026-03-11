const HND = {
  // Initialize all HND features
  init() {
    this.initMenuToggle();
    this.initTheme();
    this.initModal();
    this.initScrollToTop();
    this.initFontSizeSettings();
  },

  // Hamburger menu toggle
  initMenuToggle() {
    const hamburgerBtn = document.querySelector(".hamburger-btn");
    const nav = document.querySelector(".nav");

    if (!hamburgerBtn || !nav) return;

    hamburgerBtn.addEventListener("click", () => {
      const isOpen = nav.classList.toggle("open");
      hamburgerBtn.setAttribute("aria-expanded", isOpen);
    });
  },
  // Theme toggle (dark/light/system)
  initTheme() {
    const html = document.documentElement;
    const themeToggles = document.querySelectorAll(".dark-mode-btn");
    const themeSelect = document.getElementById("themeSelect");

    const STORAGE_KEY = "themePreference";
    const mediaQuery = window.matchMedia("(prefers-color-scheme: dark)");

    //  Get & Apply Theme
    const getSystemTheme = () => (mediaQuery.matches ? "dark" : "light");

    const applyTheme = (theme) => {
      const finalTheme = theme === "system" ? getSystemTheme() : theme;
      html.dataset.theme = finalTheme;

      // Sync controls
      themeToggles.forEach((btn) =>
        btn.setAttribute("aria-pressed", finalTheme === "dark"),
      );

      if (themeSelect) {
        themeSelect.value = theme;
      }
    };

    //  Init
    const savedTheme = localStorage.getItem(STORAGE_KEY) || "system";

    applyTheme(savedTheme);

    // Toggle buttons
    themeToggles.forEach((btn) => {
      btn.addEventListener("click", () => {
        const current = html.dataset.theme;
        const next = current === "dark" ? "light" : "dark";

        localStorage.setItem(STORAGE_KEY, next);
        applyTheme(next);
      });
    });

    // Select dropdown
    if (themeSelect) {
      themeSelect.addEventListener("change", (e) => {
        const value = e.target.value;
        localStorage.setItem(STORAGE_KEY, value);
        applyTheme(value);
      });
    }

    // React to system changes
    mediaQuery.addEventListener("change", () => {
      const saved = localStorage.getItem(STORAGE_KEY);
      if (saved === "system") {
        applyTheme("system");
      }
    });
  },
  // Modal functionality
  initModal() {
    const openButtons = Array.from(
      document.querySelectorAll('[data-toggle="modal"]'),
    );

    openButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        const targetSelector = btn.getAttribute("data-target");
        const modalBackdrop = document.querySelector(targetSelector);

        if (!modalBackdrop) return;

        this.openModal(modalBackdrop);
      });
    });

    // Close modal buttons
    document.addEventListener("click", (e) => {
      if (
        e.target.matches(".modal-close") ||
        e.target.closest(".modal-close")
      ) {
        const modalBackdrop = e.target.closest(".modal-backdrop");
        if (modalBackdrop) {
          this.closeModal(modalBackdrop);
        }
      }
    });

    // Click outside modal
    document.addEventListener("click", (e) => {
      if (e.target.classList.contains("modal-backdrop")) {
        this.closeModal(e.target);
      }
    });

    // ESC key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        const activeModal = document.querySelector(".modal-backdrop.active");
        if (activeModal) {
          this.closeModal(activeModal);
        }
      }
    });
  },
  openModal(modalBackdrop) {
    modalBackdrop.classList.add("active");
    modalBackdrop.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  },
  closeModal(modalBackdrop) {
    modalBackdrop.classList.remove("active");
    modalBackdrop.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  },
  // Scroll to top
  initScrollToTop() {
    const scrollBtn = document.getElementById("scrollToTop");
    if (!scrollBtn) return;

    const toggleScrollBtn = () => {
      if (window.scrollY > 300) {
        scrollBtn.classList.add("show");
      } else {
        scrollBtn.classList.remove("show");
      }
    };

    toggleScrollBtn(); // initial check
    window.addEventListener("scroll", toggleScrollBtn);

    scrollBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  },
  // Font size settings
  initFontSizeSettings() {
    const html = document.documentElement;
    const fontSizeSelect = document.getElementById("fontSizeSelect");

    const STORAGE_KEY = "fontSizeScale";

    //  Restore saved font size
    const savedFontScale = localStorage.getItem(STORAGE_KEY);

    if (savedFontScale) {
      document.documentElement.style.setProperty(
        "--font-size-scale",
        savedFontScale,
      );

      // Sync UI only if select exists
      if (fontSizeSelect) {
        fontSizeSelect.value = savedFontScale;
      }
    }

    //  Handle UI changes (optional)
    if (!fontSizeSelect) return;

    fontSizeSelect.addEventListener("change", (e) => {
      const scale = e.target.value;

      document.documentElement.style.setProperty("--font-size-scale", scale);
      localStorage.setItem(STORAGE_KEY, scale);
    });
  },
};

// Initialize all HND features after DOM is ready
document.addEventListener("DOMContentLoaded", () => HND.init());
