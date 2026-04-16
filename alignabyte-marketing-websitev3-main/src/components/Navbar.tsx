import { useState } from "react";
import { Link, useLocation } from "react-router-dom";
import { Menu, X } from "lucide-react";
import { Button } from "@/components/ui/button";

const navLinks = [
  { label: "Home", path: "/" },
  { label: "Services", path: "/services" },
  { label: "Case Studies", path: "/case-studies" },
  { label: "Contact", path: "/contact" },
];

const Navbar = () => {
  const [open, setOpen] = useState(false);
  const location = useLocation();

  return (
    <nav className="fixed top-0 left-0 right-0 z-50 bg-foreground/90 backdrop-blur-md border-b border-primary/10">
      <div className="container-main flex items-center justify-between h-16 md:h-20">
        <Link to="/" className="flex items-center gap-2">
          <div className="w-9 h-9 rounded-xl bg-primary flex items-center justify-center">
            <span className="text-primary-foreground font-heading font-bold text-lg">A</span>
          </div>
          <span className="text-primary-foreground font-heading font-bold text-xl tracking-tight">
            Aligna<span className="text-accent-blue">Byte</span>
          </span>
        </Link>

        {/* Desktop */}
        <div className="hidden md:flex items-center gap-8">
          {navLinks.map((link) => (
            <Link
              key={link.path}
              to={link.path}
              className={`text-sm font-medium transition-colors hover:text-accent ${
                location.pathname === link.path
                  ? "text-accent"
                  : "text-primary-foreground/90"
              }`}
            >
              {link.label}
            </Link>
          ))}
          <Link to="/contact">
            <Button className="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6">
              Fill My Job Calendar
            </Button>
          </Link>
        </div>

        {/* Mobile toggle */}
        <button
          onClick={() => setOpen(!open)}
          className="md:hidden text-primary-foreground"
        >
          {open ? <X size={24} /> : <Menu size={24} />}
        </button>
      </div>

      {/* Mobile menu */}
      {open && (
        <div className="md:hidden bg-foreground/95 backdrop-blur-md border-t border-primary/10 px-4 pb-6 pt-2">
          {navLinks.map((link) => (
            <Link
              key={link.path}
              to={link.path}
              onClick={() => setOpen(false)}
              className={`block py-3 text-sm font-medium transition-colors ${
                location.pathname === link.path
                  ? "text-accent"
                  : "text-primary-foreground/90"
              }`}
            >
              {link.label}
            </Link>
          ))}
          <Link to="/contact" onClick={() => setOpen(false)}>
            <Button className="w-full mt-4 bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl">
              Fill My Job Calendar
            </Button>
          </Link>
        </div>
      )}
    </nav>
  );
};

export default Navbar;
