import { useState } from "react";
import { X, ArrowRight, CheckCircle2, Loader2 } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";

interface BookingModalProps {
  open: boolean;
  onClose: () => void;
}

const BookingModal = ({ open, onClose }: BookingModalProps) => {
  const [loading, setLoading] = useState(false);
  const [success, setSuccess] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setLoading(true);
    setTimeout(() => {
      setLoading(false);
      setSuccess(true);
    }, 1500);
  };

  const handleClose = () => {
    onClose();
    setTimeout(() => {
      setSuccess(false);
      setLoading(false);
    }, 300);
  };

  if (!open) return null;

  return (
    <div
      className="fixed inset-0 z-[100] flex items-end sm:items-center justify-center bg-foreground/60 backdrop-blur-sm"
      onClick={handleClose}
    >
      <div
        className="bg-background rounded-t-2xl sm:rounded-2xl shadow-2xl w-full max-w-md max-h-[90vh] overflow-y-auto animate-scale-in"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Header */}
        <div className="bg-primary rounded-t-2xl sm:rounded-t-2xl p-6 relative">
          <button
            onClick={handleClose}
            className="absolute top-4 right-4 text-primary-foreground/70 hover:text-primary-foreground transition-colors"
          >
            <X className="w-5 h-5" />
          </button>
          <h3 className="text-xl font-heading font-bold text-primary-foreground">
            Fill Your Job Calendar
          </h3>
          <p className="text-primary-foreground/90 text-sm mt-1">
            Tell us where you work and we'll check availability.
          </p>
        </div>

        {/* Body */}
        <div className="p-6">
          {success ? (
            <div className="text-center py-8">
              <CheckCircle2 className="w-16 h-16 text-success mx-auto mb-4" />
              <h4 className="text-xl font-heading font-bold text-foreground mb-2">
                Application Received!
              </h4>
              <p className="text-muted-foreground text-sm mb-6">
                We'll review your territory and respond within 24 hours.
              </p>
              <Button
                onClick={handleClose}
                className="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-8"
              >
                Done
              </Button>
            </div>
          ) : (
            <form onSubmit={handleSubmit} className="space-y-4">
              <div>
                <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">
                  Full Name *
                </label>
                <Input
                  required
                  placeholder="John Smith"
                  className="rounded-lg border-border focus:ring-primary/30 h-11"
                />
              </div>
              <div>
                <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">
                  Email *
                </label>
                <Input
                  required
                  type="email"
                  placeholder="john@company.com"
                  className="rounded-lg border-border focus:ring-primary/30 h-11"
                />
              </div>
              <div>
                <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">
                  Phone *
                </label>
                <Input
                  required
                  type="tel"
                  placeholder="(555) 123-4567"
                  className="rounded-lg border-border focus:ring-primary/30 h-11"
                />
              </div>
              <Button
                type="submit"
                disabled={loading}
                className="w-full bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl py-5 text-base animate-pulse-glow"
              >
                {loading ? (
                  <>
                    <Loader2 className="w-5 h-5 animate-spin mr-2" />
                    Submitting...
                  </>
                ) : (
                  <>
                    Check My Availability
                    <ArrowRight className="ml-2 w-5 h-5" />
                  </>
                )}
              </Button>
            </form>
          )}
        </div>
      </div>
    </div>
  );
};

export default BookingModal;
