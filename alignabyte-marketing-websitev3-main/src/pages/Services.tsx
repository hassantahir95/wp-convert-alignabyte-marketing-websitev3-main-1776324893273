import { useState } from "react";
import { Button } from "@/components/ui/button";
import {
  Phone, MapPin, Calendar, Shield, Zap, Target, Clock, Filter,
  ArrowRight, CheckCircle2, Settings, BarChart3,
} from "lucide-react";
import howworksBg from "@/assets/howworks-bg.jpg";
import servicesDispatch from "@/assets/services-dispatch.jpg";
import servicesOnsite from "@/assets/services-onsite.jpg";
import servicesResult from "@/assets/services-result.jpg";
import servicesCtaBg from "@/assets/services-cta-bg.jpg";
import BookingModal from "@/components/BookingModal";
import ScrollReveal from "@/components/ScrollReveal";

const services = [
  { icon: Phone, title: "Direct Homeowner Calls", desc: "Real homeowner calls routed straight to your dispatch line. No middlemen, no form fills." },
  { icon: MapPin, title: "Geo Targeted Job Matching", desc: "Every lead is matched by service type and your exact coverage area." },
  { icon: Filter, title: "Intent Filtering Engine", desc: "Our system filters out tire kickers, spam, and low intent inquiries before they reach you." },
  { icon: Calendar, title: "Automated Scheduling", desc: "Qualified projects are booked directly into your calendar. Your dispatch schedules, not chases." },
  { icon: BarChart3, title: "Pipeline Visibility", desc: "See your entire job pipeline at a glance. Know what's booked, pending, and coming." },
  { icon: Shield, title: "Exclusive Territory Lock", desc: "One contractor per area. Your market. Your jobs. No internal competition." },
];

const processSteps = [
  { num: "01", icon: Target, title: "Discovery Call", desc: "We learn your services, coverage area, crew capacity, and revenue goals." },
  { num: "02", icon: Settings, title: "System Setup", desc: "AlignaByte Dispatch™ is configured and calibrated to your exact specifications." },
  { num: "03", icon: Zap, title: "Launch & Optimize", desc: "Real homeowner calls start flowing. We monitor, optimize, and scale." },
  { num: "04", icon: Clock, title: "Scale & Dominate", desc: "Your job board fills weeks ahead. Your territory becomes yours." },
];

const Services = () => {
  const [modalOpen, setModalOpen] = useState(false);

  return (
    <div className="min-h-screen pt-16 md:pt-20">
      <BookingModal open={modalOpen} onClose={() => setModalOpen(false)} />

      {/* HERO */}
      <section className="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src={howworksBg} alt="Construction blueprints" className="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]" />
        <div className="absolute inset-0 bg-foreground/80" />
        <div className="relative z-10 container-main text-center">
          <div className="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-5 md:mb-8 animate-fade-in-up">
            <span className="w-2 h-2 rounded-full bg-success animate-pulse" />
            <span className="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Our Services</span>
          </div>
          <h1 className="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-6 animate-fade-in-up delay-100">
            Everything Your Dispatch Needs to <span className="text-accent-blue">Stay Full</span>
          </h1>
          <p className="text-sm md:text-lg text-primary-foreground/90 max-w-2xl mx-auto mb-6 md:mb-10 animate-fade-in-up delay-200">
            The AlignaByte Dispatch™ System isn't one tool. It's an integrated engine that fills your schedule with confirmed residential projects.
          </p>
          <div className="animate-fade-in-up delay-300">
            <Button onClick={() => setModalOpen(true)} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 text-sm md:px-8 md:py-6 md:text-base animate-pulse-glow group">
              Get Started <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform" />
            </Button>
          </div>
        </div>
      </section>

      {/* SECTION 1: SERVICES */}
      <section className="bg-background">
        <div className="grid grid-cols-1 lg:grid-cols-2">
          <div className="py-12 md:py-20 lg:py-28 lg:pl-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pr-16 px-4 sm:px-6">
            <ScrollReveal animation="slide-up">
              <div className="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                <Zap className="w-4 h-4 text-primary" />
                <span className="text-xs font-heading font-semibold text-primary uppercase tracking-wider">Core Features</span>
              </div>
            </ScrollReveal>
            <ScrollReveal animation="scale">
              <h2 className="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-3 md:mb-4">
                What's Inside the <span className="text-primary">AlignaByte Marketing System</span>
              </h2>
            </ScrollReveal>
            <ScrollReveal animation="slide-up" delay={1}>
              <p className="text-base md:text-lg text-muted-foreground mb-6 md:mb-10">
                Every component is built for one thing: keeping your crews working and your schedule full.
              </p>
            </ScrollReveal>
            <div className="space-y-4 md:space-y-5">
              {services.map((s, i) => (
                <ScrollReveal key={s.title} animation="slide-left" delay={Math.min(i + 1, 5) as 1|2|3|4|5}>
                  <div className="group flex items-start gap-3 md:gap-4">
                    <div className="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors">
                      <s.icon className="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-primary-foreground transition-colors" />
                    </div>
                    <div>
                      <h3 className="text-base md:text-lg font-heading font-bold text-foreground mb-1">{s.title}</h3>
                      <p className="text-muted-foreground text-sm leading-relaxed">{s.desc}</p>
                    </div>
                  </div>
                </ScrollReveal>
              ))}
            </div>
          </div>

          <div className="relative h-[300px] md:h-[400px] lg:h-auto">
            <img src={servicesDispatch} alt="Dispatch scheduling system" loading="lazy" className="absolute inset-0 w-full h-full object-cover" />
          </div>
        </div>
      </section>

      {/* SECTION 2: PROCESS */}
      <section className="bg-background">
        <div className="grid grid-cols-1 lg:grid-cols-2">
          <div className="relative h-[300px] md:h-[400px] lg:h-auto">
            <img src={servicesOnsite} alt="Contractor on site" loading="lazy" className="absolute inset-0 w-full h-full object-cover" />
          </div>

          <div className="py-12 md:py-20 lg:py-28 lg:pr-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pl-16 px-4 sm:px-6">
            <ScrollReveal animation="slide-up">
              <div className="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                <Settings className="w-4 h-4 text-primary" />
                <span className="text-xs font-heading font-semibold text-primary uppercase tracking-wider">The Process</span>
              </div>
            </ScrollReveal>
            <ScrollReveal animation="scale">
              <h2 className="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-3 md:mb-4">
                From Zero to <span className="text-primary">Fully Booked</span>
              </h2>
            </ScrollReveal>
            <ScrollReveal animation="slide-up" delay={1}>
              <p className="text-base md:text-lg text-muted-foreground mb-6 md:mb-10">
                Four simple steps to transform your dispatch from empty to overflowing.
              </p>
            </ScrollReveal>
            <div className="space-y-4 md:space-y-6">
              {processSteps.map((step, i) => (
                <ScrollReveal key={step.num} animation="slide-right" delay={Math.min(i + 1, 4) as 1|2|3|4}>
                  <div className="flex items-start gap-3 md:gap-5">
                    <div className="flex flex-col items-center flex-shrink-0">
                      <div className="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary flex items-center justify-center">
                        <step.icon className="w-5 h-5 md:w-6 md:h-6 text-primary-foreground" />
                      </div>
                    </div>
                    <div>
                      <div className="flex items-center gap-2 md:gap-3 mb-1">
                        <span className="text-xs md:text-sm font-heading font-bold text-primary/60">{step.num}</span>
                        <h3 className="text-base md:text-lg font-heading font-bold text-foreground">{step.title}</h3>
                      </div>
                      <p className="text-muted-foreground text-sm leading-relaxed">{step.desc}</p>
                    </div>
                  </div>
                </ScrollReveal>
              ))}
            </div>
            <ScrollReveal animation="slide-up" delay={5}>
              <Button onClick={() => setModalOpen(true)} className="mt-8 md:mt-10 bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 md:px-8 md:py-5 text-sm md:text-base group">
                Get Started <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform" />
              </Button>
            </ScrollReveal>
          </div>
        </div>
      </section>

      {/* SECTION 3: WHAT YOU GET */}
      <section className="bg-background">
        <div className="grid grid-cols-1 lg:grid-cols-2">
          <div className="py-12 md:py-20 lg:py-28 lg:pl-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pr-16 px-4 sm:px-6">
            <ScrollReveal animation="slide-up">
              <div className="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                <CheckCircle2 className="w-4 h-4 text-primary" />
                <span className="text-xs font-heading font-semibold text-primary uppercase tracking-wider">What You Get</span>
              </div>
            </ScrollReveal>
            <ScrollReveal animation="scale">
              <h2 className="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-6 md:mb-8">
                What You Get with <span className="text-primary">AlignaByte Marketing</span>
              </h2>
            </ScrollReveal>
            <div className="space-y-4 md:space-y-5 mb-8 md:mb-10">
              {[
                "20 to 40 booked residential projects per month",
                "Exclusive territory with no competition from our system",
                "Direct homeowner calls, not internet leads",
                "Automated scheduling into your dispatch",
                "30 day pipeline visibility at all times",
                "Dedicated account optimization",
              ].map((item, i) => (
                <ScrollReveal key={item} animation="slide-left" delay={Math.min(i + 1, 5) as 1|2|3|4|5}>
                  <div className="flex items-start gap-3 md:gap-4">
                    <div className="w-7 h-7 md:w-8 md:h-8 rounded-full bg-success/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                      <CheckCircle2 className="w-4 h-4 md:w-5 md:h-5 text-success" />
                    </div>
                    <span className="text-foreground font-medium text-sm md:text-base">{item}</span>
                  </div>
                </ScrollReveal>
              ))}
            </div>

            <ScrollReveal animation="slide-up">
              <div className="bg-primary rounded-2xl p-5 md:p-8">
                <h3 className="text-lg md:text-xl font-heading font-bold text-primary-foreground mb-2 md:mb-3">Ready to dominate your area?</h3>
                <p className="text-primary-foreground/90 text-sm mb-4 md:mb-6">We only take one contractor per territory. Check if yours is still available.</p>
                <Button onClick={() => setModalOpen(true)} className="bg-primary-foreground text-primary rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 w-full text-sm md:text-base">
                  Check Availability <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5" />
                </Button>
              </div>
            </ScrollReveal>
          </div>

          <div className="relative h-[300px] md:h-[400px] lg:h-auto">
            <img src={servicesResult} alt="Completed residential home" loading="lazy" className="absolute inset-0 w-full h-full object-cover" />
          </div>
        </div>
      </section>

      {/* CTA SECTION */}
      <section className="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src={servicesCtaBg} alt="Residential neighborhood" loading="lazy" className="absolute inset-0 w-full h-full object-cover blur-[6px] scale-105" />
        <div className="absolute inset-0 bg-foreground/80" />
        <div className="relative z-10 container-main text-center max-w-3xl mx-auto">
          <ScrollReveal animation="scale">
            <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-5">
              Ready to Fill Your <span className="text-accent-blue">Job Calendar?</span>
            </h2>
          </ScrollReveal>
          <ScrollReveal animation="slide-up" delay={1}>
            <p className="text-sm md:text-lg text-primary-foreground/90 mb-6 md:mb-10">
              We only partner with one contractor per territory. Check if your area is still available before someone else locks it in.
            </p>
          </ScrollReveal>
          <ScrollReveal animation="slide-up" delay={2}>
            <Button onClick={() => setModalOpen(true)} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 text-sm md:px-10 md:py-6 md:text-base animate-pulse-glow group">
              Check My Availability <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform" />
            </Button>
          </ScrollReveal>
        </div>
      </section>
    </div>
  );
};

export default Services;
