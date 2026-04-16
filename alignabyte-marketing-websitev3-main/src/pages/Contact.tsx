import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import {
  Phone, Mail, ArrowRight, Clock, Shield, CheckCircle2, Plus, Minus,
} from "lucide-react";
import heroTeam from "@/assets/hero-team.jpg";
import BookingModal from "@/components/BookingModal";
import ScrollReveal from "@/components/ScrollReveal";

const faqs = [
  { q: "How does AlignaByte Marketing generate leads for my business?", a: "AlignaByte Marketing drives real homeowner calls directly to your dispatch line through geo-targeted campaigns. No form fills, no shared leads. Every call is a qualified homeowner in your service area looking for the work you do." },
  { q: "What does 'exclusive territory' mean?", a: "We only partner with one contractor per service type in each geographic area. That means no internal competition. If you lock in your territory, no other contractor in your trade will receive calls from our system in that zone." },
  { q: "How quickly will I start receiving calls?", a: "Most contractors start receiving qualified homeowner calls within the first 5 to 7 days after system launch. Our team handles the full setup, calibration, and optimization so you can focus on running your crews." },
  { q: "Is there a long term contract?", a: "No. AlignaByte Marketing operates on a month to month basis. We believe results should keep you here, not paperwork. Most contractors stay because the system pays for itself within the first week." },
  { q: "What types of contractors do you work with?", a: "We work with residential contractors across roofing, remodeling, HVAC, plumbing, electrical, painting, landscaping, and general contracting. If you serve homeowners, AlignaByte Marketing can fill your calendar." },
  { q: "How many jobs can I expect per month?", a: "Depending on your service area and capacity, most partners receive between 20 and 40 booked residential projects per month. We scale based on your crew size and revenue goals." },
  { q: "What happens if a lead is not qualified?", a: "Our Intent Filtering Engine screens out spam, tire kickers, and low intent inquiries before they ever reach you. If a call doesn't meet our quality standards, it doesn't count toward your pipeline." },
];

const Contact = () => {
  const [submitted, setSubmitted] = useState(false);
  const [modalOpen, setModalOpen] = useState(false);
  const [openFaq, setOpenFaq] = useState<number | null>(null);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setSubmitted(true);
  };

  return (
    <div className="min-h-screen pt-16 md:pt-20">
      <BookingModal open={modalOpen} onClose={() => setModalOpen(false)} />

      {/* HERO */}
      <section className="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src={heroTeam} alt="Contractor team" className="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]" />
        <div className="absolute inset-0 bg-foreground/80" />
        <div className="relative z-10 container-main text-center">
          <div className="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-5 md:mb-8 animate-fade-in-up">
            <span className="w-2 h-2 rounded-full bg-success animate-pulse" />
            <span className="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Get Started</span>
          </div>
          <h1 className="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-6 animate-fade-in-up delay-100">
            Ready to <span className="text-accent-blue">Fill Your Calendar?</span>
          </h1>
          <p className="text-sm md:text-lg text-primary-foreground/90 max-w-2xl mx-auto animate-fade-in-up delay-200">
            Tell us about your business. We'll show you exactly how many booked jobs we can deliver every month.
          </p>
        </div>
      </section>

      {/* FORM + INFO */}
      <section className="py-12 md:py-20 lg:py-28 bg-background">
        <div className="container-main">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
            <div>
              <ScrollReveal animation="scale">
                <h2 className="text-xl sm:text-2xl md:text-3xl font-heading font-bold text-foreground mb-6 md:mb-8">
                  Check Your <span className="text-primary">Availability</span>
                </h2>
              </ScrollReveal>

              {submitted ? (
                <ScrollReveal animation="slide-up">
                  <div className="bg-success/10 border border-success/20 rounded-2xl p-6 md:p-10 text-center">
                    <CheckCircle2 className="w-12 h-12 md:w-16 md:h-16 text-success mx-auto mb-4" />
                    <h3 className="text-xl md:text-2xl font-heading font-bold text-foreground mb-2">Application Received!</h3>
                    <p className="text-muted-foreground text-sm">We'll review your territory and get back to you within 24 hours.</p>
                  </div>
                </ScrollReveal>
              ) : (
                <ScrollReveal animation="slide-up" delay={1}>
                  <form onSubmit={handleSubmit} className="space-y-4 md:space-y-5">
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                      <div>
                        <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">Full Name *</label>
                        <Input required placeholder="John Smith" className="rounded-lg border-border h-10 md:h-11 focus:ring-primary/30" />
                      </div>
                      <div>
                        <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">Company Name *</label>
                        <Input required placeholder="Smith Roofing LLC" className="rounded-lg border-border h-10 md:h-11 focus:ring-primary/30" />
                      </div>
                    </div>
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                      <div>
                        <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">Email *</label>
                        <Input required type="email" placeholder="john@smithroofing.com" className="rounded-lg border-border h-10 md:h-11 focus:ring-primary/30" />
                      </div>
                      <div>
                        <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">Phone *</label>
                        <Input required type="tel" placeholder="(555) 123-4567" className="rounded-lg border-border h-10 md:h-11 focus:ring-primary/30" />
                      </div>
                    </div>
                    <div>
                      <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">Service Type *</label>
                      <Input required placeholder="e.g. Roofing, Remodeling, HVAC" className="rounded-lg border-border h-10 md:h-11 focus:ring-primary/30" />
                    </div>
                    <div>
                      <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">Service Area *</label>
                      <Input required placeholder="e.g. Dallas, TX, 50 mile radius" className="rounded-lg border-border h-10 md:h-11 focus:ring-primary/30" />
                    </div>
                    <div>
                      <label className="block text-sm font-heading font-semibold text-foreground mb-1.5">Anything else?</label>
                      <Textarea placeholder="Tell us about your biggest scheduling challenge..." className="rounded-lg border-border min-h-[80px] md:min-h-[100px] focus:ring-primary/30" />
                    </div>
                    <Button type="submit" className="w-full bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl py-4 md:py-5 text-sm md:text-base animate-pulse-glow">
                      Check My Availability <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5" />
                    </Button>
                    <p className="text-[10px] md:text-xs text-muted-foreground text-center">We only accept one contractor per area. Applying does not guarantee acceptance.</p>
                  </form>
                </ScrollReveal>
              )}
            </div>

            <div className="space-y-4 md:space-y-6">
              <ScrollReveal animation="slide-right">
                <div className="bg-highlight border border-primary/10 rounded-2xl p-5 md:p-8">
                  <h3 className="text-lg md:text-xl font-heading font-bold text-foreground mb-4 md:mb-6">Why Contractors Choose AlignaByte Marketing</h3>
                  <div className="space-y-3 md:space-y-4">
                    {[
                      "20 to 40 booked jobs per month guaranteed",
                      "Exclusive territory with no internal competition",
                      "Direct homeowner calls to your dispatch",
                      "System pays for itself in Week 1",
                      "No contracts, results speak for themselves",
                    ].map((item) => (
                      <div key={item} className="flex items-start gap-2 md:gap-3">
                        <CheckCircle2 className="w-4 h-4 md:w-5 md:h-5 text-success flex-shrink-0 mt-0.5" />
                        <span className="text-foreground text-xs md:text-sm font-medium">{item}</span>
                      </div>
                    ))}
                  </div>
                </div>
              </ScrollReveal>

              <ScrollReveal animation="slide-right" delay={2}>
                <div className="bg-card border border-border rounded-2xl p-5 md:p-8 shadow-lg">
                  <h3 className="text-lg md:text-xl font-heading font-bold text-foreground mb-4 md:mb-6">Get In Touch</h3>
                  <div className="space-y-4 md:space-y-5">
                    {[
                      { icon: Phone, label: "Call Us", value: "(555) BUILD NOW" },
                      { icon: Mail, label: "Email", value: "dispatch@alignabyte.com" },
                      { icon: Clock, label: "Response Time", value: "Within 24 Hours" },
                      { icon: Shield, label: "Territory", value: "One Contractor Per Area" },
                    ].map((item) => (
                      <div key={item.label} className="flex items-center gap-3 md:gap-4">
                        <div className="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary flex items-center justify-center flex-shrink-0">
                          <item.icon className="w-5 h-5 md:w-6 md:h-6 text-primary-foreground" />
                        </div>
                        <div>
                          <p className="text-xs md:text-sm text-muted-foreground">{item.label}</p>
                          <p className="font-heading font-bold text-foreground text-sm md:text-base">{item.value}</p>
                        </div>
                      </div>
                    ))}
                  </div>
                </div>
              </ScrollReveal>
            </div>
          </div>
        </div>
      </section>

      {/* FAQ SECTION */}
      <section className="py-12 md:py-20 lg:py-28 bg-highlight">
        <div className="container-main max-w-3xl">
          <ScrollReveal animation="scale" className="text-center mb-8 md:mb-12">
            <div className="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
              <span className="text-xs font-heading font-semibold text-primary uppercase tracking-wider">FAQ</span>
            </div>
            <h2 className="text-2xl sm:text-3xl md:text-4xl font-heading font-bold text-foreground">
              Frequently Asked <span className="text-primary">Questions</span>
            </h2>
          </ScrollReveal>

          <div className="space-y-2 md:space-y-3">
            {faqs.map((faq, i) => (
              <ScrollReveal key={i} animation="slide-up" delay={Math.min(i + 1, 5) as 1|2|3|4|5}>
                <div className="bg-background border border-border rounded-xl overflow-hidden transition-all">
                  <button
                    onClick={() => setOpenFaq(openFaq === i ? null : i)}
                    className="w-full flex items-center justify-between gap-3 md:gap-4 px-4 py-4 md:px-6 md:py-5 text-left"
                  >
                    <span className="font-heading font-bold text-foreground text-xs sm:text-sm md:text-base">{faq.q}</span>
                    <div className="w-7 h-7 md:w-8 md:h-8 rounded-full border border-border flex items-center justify-center flex-shrink-0">
                      {openFaq === i ? <Minus className="w-3.5 h-3.5 md:w-4 md:h-4 text-primary" /> : <Plus className="w-3.5 h-3.5 md:w-4 md:h-4 text-muted-foreground" />}
                    </div>
                  </button>
                  {openFaq === i && (
                    <div className="px-4 md:px-6 pb-4 md:pb-5">
                      <p className="text-muted-foreground text-xs md:text-sm leading-relaxed">{faq.a}</p>
                    </div>
                  )}
                </div>
              </ScrollReveal>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
};

export default Contact;
