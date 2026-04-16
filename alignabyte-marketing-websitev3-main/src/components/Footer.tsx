import { Link } from "react-router-dom";
import { Facebook, Instagram, Linkedin } from "lucide-react";

const navLinks = [
  { label: "Home", path: "/" },
  { label: "Services", path: "/services" },
  { label: "Case Studies", path: "/case-studies" },
  { label: "Contact", path: "/contact" },
];

const socialLinks = [
  { icon: Facebook, href: "#", label: "Facebook" },
  { icon: Instagram, href: "#", label: "Instagram" },
  { icon: Linkedin, href: "#", label: "LinkedIn" },
];

const Footer = () => (
  <footer className="bg-foreground pt-10 md:pt-16 pb-6 md:pb-8">
    <div className="container-main">
      {/* 3-column grid */}
      <div className="grid grid-cols-1 sm:grid-cols-3 gap-8 sm:gap-8 mb-8 md:mb-10">
        {/* Brand + tagline */}
        <div className="flex flex-col gap-3 md:gap-4">
          <Link to="/" className="flex items-center gap-2">
            <div className="w-8 h-8 md:w-9 md:h-9 rounded-xl bg-primary flex items-center justify-center">
              <span className="text-primary-foreground font-heading font-bold text-base md:text-lg">A</span>
            </div>
            <span className="text-primary-foreground font-heading font-bold text-lg md:text-xl tracking-tight">
              Aligna<span className="text-accent-blue">Byte</span>
            </span>
          </Link>
          <p className="text-primary-foreground/80 text-xs md:text-sm leading-relaxed max-w-xs">
            The job-booking engine built for residential contractors. No leads. No guesses. Just booked work.
          </p>
        </div>

        {/* Navigation */}
        <div>
          <h4 className="font-heading font-semibold text-primary-foreground text-xs md:text-sm uppercase tracking-wider mb-3 md:mb-4">
            Navigation
          </h4>
          <ul className="space-y-2 md:space-y-2.5">
            {navLinks.map((link) => (
              <li key={link.path}>
                <Link
                  to={link.path}
                  className="text-primary-foreground/80 text-xs md:text-sm hover:text-accent transition-colors"
                >
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </div>

        {/* Social */}
        <div>
          <h4 className="font-heading font-semibold text-primary-foreground text-xs md:text-sm uppercase tracking-wider mb-3 md:mb-4">
            Connect
          </h4>
          <div className="flex gap-3">
            {socialLinks.map((social) => (
              <a
                key={social.label}
                href={social.href}
                aria-label={social.label}
                className="w-9 h-9 md:w-10 md:h-10 rounded-full border border-primary-foreground/20 flex items-center justify-center text-primary-foreground/80 hover:bg-accent hover:text-foreground hover:border-accent transition-all duration-200"
              >
                <social.icon className="w-4 h-4" />
              </a>
            ))}
          </div>
        </div>
      </div>

      {/* Divider + copyright */}
      <div className="border-t border-primary-foreground/10 pt-4 md:pt-6 flex flex-col sm:flex-row items-center justify-between gap-2 md:gap-3">
        <p className="text-primary-foreground/70 text-[10px] md:text-xs">
          © {new Date().getFullYear()} AlignaByte Marketing™. All rights reserved.
        </p>
        <p className="text-primary-foreground/60 text-[10px] md:text-xs">
          Exclusive job-booking for residential contractors.
        </p>
      </div>
    </div>
  </footer>
);

export default Footer;
