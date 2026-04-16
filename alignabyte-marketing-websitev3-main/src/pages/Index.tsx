import { useState, useEffect, useCallback } from "react";
import { Button } from "@/components/ui/button";
import {
  CheckCircle2, AlertTriangle, Phone, MapPin, Calendar, ArrowRight,
  Shield, Zap, Target, Clock, Users, Star, X, Check, TrendingUp, Lock,
  Quote, ChevronLeft, ChevronRight,
} from "lucide-react";
import heroImg from "@/assets/hero-construction.jpg";
import heroAerial from "@/assets/hero-aerial.jpg";
import heroFraming from "@/assets/hero-framing.jpg";
import heroTeam from "@/assets/hero-team.jpg";
import phoneImg from "@/assets/phone-jobsite.jpg";
import tabletImg from "@/assets/dispatch-tablet.jpg";
import solutionDashboard from "@/assets/solution-dashboard.jpg";
import homesImg from "@/assets/homes-wide.jpg";
import howworksBg from "@/assets/howworks-bg.jpg";
import caseRoofing from "@/assets/case-roofing.jpg";
import caseGeneral from "@/assets/case-general.jpg";
import caseRemodel from "@/assets/case-remodel.jpg";
import finalSunset from "@/assets/final-sunset.jpg";
import BookingModal from "@/components/BookingModal";
import ScrollReveal from "@/components/ScrollReveal";

const heroImages = [heroImg, heroAerial, heroFraming, heroTeam];

const testimonials = [
  { quote: "I stopped chasing leads. Now jobs come in ready to schedule.", name: "Mike R.", role: "Roofing Contractor / TX", stat: "+32 jobs/mo", avatar: "M" },
  { quote: "Our crews went from waiting to working every single week.", name: "David T.", role: "General Contractor / FL", stat: "6 to 10/week", avatar: "D" },
  { quote: "This is the first system that actually delivers booked work, not just calls.", name: "Sarah K.", role: "Remodeling / OH", stat: "30 days ahead", avatar: "S" },
  { quote: "We went from scrambling for leads to turning down overflow work in six weeks.", name: "Jason M.", role: "HVAC / AZ", stat: "40+ jobs/mo", avatar: "J" },
];

const Index = () => {
  const [modalOpen, setModalOpen] = useState(false);
  const openModal = () => setModalOpen(true);

  const [heroIndex, setHeroIndex] = useState(0);
  useEffect(() => {
    const timer = setInterval(() => setHeroIndex((p) => (p + 1) % heroImages.length), 3000);
    return () => clearInterval(timer);
  }, []);

  const [testimonialIndex, setTestimonialIndex] = useState(0);
  const [testimonialFade, setTestimonialFade] = useState(true);
  const goToTestimonial = useCallback((index: number) => {
    setTestimonialFade(false);
    setTimeout(() => { setTestimonialIndex(index); setTestimonialFade(true); }, 300);
  }, []);
  useEffect(() => {
    const timer = setInterval(() => goToTestimonial((testimonialIndex + 1) % testimonials.length), 6000);
    return () => clearInterval(timer);
  }, [testimonialIndex, goToTestimonial]);

  const t = testimonials[testimonialIndex];

  return (
    <div className="min-h-screen">
      <BookingModal open={modalOpen} onClose={() => setModalOpen(false)} />

      {/* 1. HERO */}
      <section id="hero" className="relative min-h-[100svh] flex items-center justify-center overflow-hidden">
        {heroImages.map((img, i) => (
          <img key={i} src={img} alt="Construction site" className="absolute inset-0 w-full h-full object-cover transition-opacity duration-500"
            style={{ opacity: i === heroIndex ? 1 : 0, animation: i === heroIndex ? "hero-zoom 3s ease-out forwards" : "none" }} />
        ))}
        <div className="absolute inset-0 bg-foreground/85" />
        <div className="relative z-10 container-main text-center max-w-4xl mx-auto py-20 md:py-32">
          <div className="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-6 md:mb-10 animate-fade-in-up">
            <span className="w-2 h-2 rounded-full bg-success animate-pulse" />
            <span className="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">AlignaByte Dispatch™</span>
          </div>
          <h1 className="text-2xl sm:text-3xl md:text-5xl lg:text-7xl font-heading font-extrabold text-primary-foreground leading-[1.1] mb-5 md:mb-8 animate-fade-in-up delay-100">
            Crews Sitting Idle While{" "}<span className="text-accent-blue">Competitors Book Your Jobs?</span>
          </h1>
          <p className="text-sm sm:text-base md:text-xl text-primary-foreground/90 max-w-3xl mx-auto mb-3 md:mb-4 font-body leading-relaxed animate-fade-in-up delay-200">
            We deliver <strong className="text-accent-blue">20 to 40 booked</strong> residential projects every month straight to your dispatch. Not leads, not guesses, but <strong className="text-accent-blue">confirmed work</strong>.
          </p>
          <p className="text-xs sm:text-sm md:text-base text-primary-foreground/80 mb-8 md:mb-12 animate-fade-in-up delay-300">No chasing. No ghost calls. No empty weeks.</p>
          <div className="animate-fade-in-up delay-400 mb-10 md:mb-16">
            <Button onClick={openModal} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl px-6 py-4 text-sm sm:px-8 sm:py-5 md:px-10 md:py-6 md:text-base animate-pulse-glow hover:opacity-90 group">
              Fill My Job Calendar <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform" />
            </Button>
          </div>
          <div className="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-8 animate-fade-in-up delay-500">
            {["Booked jobs, not leads", "Matched by service + location", "Direct to your dispatch"].map((text) => (
              <div key={text} className="flex items-center gap-2">
                <CheckCircle2 className="w-4 h-4 md:w-5 md:h-5 text-success flex-shrink-0" />
                <span className="text-xs sm:text-sm text-primary-foreground/90">{text}</span>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* 2. PROBLEM */}
      <section id="problem" className="bg-background">
        <div className="grid grid-cols-1 lg:grid-cols-2">
          <div className="relative h-[300px] md:h-[400px] lg:h-auto lg:min-h-[600px]">
            <img src={phoneImg} alt="Missed calls on jobsite" className="absolute inset-0 w-full h-full object-cover" />
          </div>
          <div className="py-12 md:py-20 lg:py-28 lg:pr-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pl-16 px-4 sm:px-6">
            <ScrollReveal animation="slide-up">
              <div className="inline-flex items-center gap-2 bg-destructive/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                <AlertTriangle className="w-4 h-4 text-destructive" />
                <span className="text-xs font-heading font-semibold text-destructive uppercase tracking-wider">The Problem</span>
              </div>
            </ScrollReveal>
            <ScrollReveal animation="scale">
              <h2 className="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-4 md:mb-6">Here's What's Actually Happening</h2>
            </ScrollReveal>
            <ScrollReveal animation="slide-up" delay={1}>
              <p className="text-base md:text-lg text-muted-foreground mb-6 md:mb-8 font-body">You're not short on demand.<br />You're losing it in the process:</p>
            </ScrollReveal>
            <div className="space-y-3 md:space-y-4 mb-8 md:mb-10">
              {[
                { icon: Phone, text: "Calls come in but don't convert" },
                { icon: Users, text: "Leads ghost after first contact" },
                { icon: Clock, text: "Dispatch chases instead of scheduling" },
                { icon: Calendar, text: "Job board has gaps every week" },
              ].map((item, i) => (
                <ScrollReveal key={item.text} animation="slide-left" delay={(i + 1) as 1|2|3|4}>
                  <div className="group flex items-center gap-3 md:gap-4 bg-card border border-border rounded-xl p-3 md:p-5 hover:border-destructive/30 hover:shadow-md transition-all">
                    <div className="w-9 h-9 md:w-10 md:h-10 rounded-lg bg-destructive/10 flex items-center justify-center flex-shrink-0">
                      <item.icon className="w-4 h-4 md:w-5 md:h-5 text-destructive" />
                    </div>
                    <span className="text-foreground font-medium text-sm md:text-base">{item.text}</span>
                  </div>
                </ScrollReveal>
              ))}
            </div>
            <ScrollReveal animation="slide-up">
              <div className="bg-highlight rounded-2xl border border-primary/10 p-5 md:p-8">
                <p className="text-base md:text-xl font-heading font-bold text-foreground mb-1">Your crews aren't the problem.</p>
                <p className="text-base md:text-xl font-heading font-bold text-primary mb-4 md:mb-6">Your pipeline is.</p>
                <Button onClick={openModal} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-5 py-4 md:px-6 md:py-5 text-sm md:text-base">
                  Fix My Pipeline <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5" />
                </Button>
              </div>
            </ScrollReveal>
          </div>
        </div>
      </section>

      {/* 3. REFRAME */}
      <section id="reframe" className="bg-background">
        <div className="grid grid-cols-1 lg:grid-cols-2">
          <div className="py-12 md:py-20 lg:py-28 lg:pl-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pr-16 px-4 sm:px-6">
            <ScrollReveal animation="scale">
              <h2 className="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-foreground mb-2">You Don't Need More Leads</h2>
              <p className="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-heading font-extrabold text-primary mb-6 md:mb-10">You Need Booked Jobs</p>
            </ScrollReveal>
            <ScrollReveal animation="slide-up" delay={1}>
              <p className="text-base md:text-lg text-muted-foreground mb-6 md:mb-8 font-body">Most agencies send traffic. We send:</p>
            </ScrollReveal>
            <div className="space-y-3 md:space-y-4 mb-8 md:mb-10">
              {["Confirmed homeowners", "Ready to move projects", "Scheduled work"].map((item, i) => (
                <ScrollReveal key={item} animation="slide-right" delay={(i + 1) as 1|2|3}>
                  <div className="flex items-center gap-3 md:gap-4">
                    <div className="w-9 h-9 md:w-10 md:h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                      <CheckCircle2 className="w-4 h-4 md:w-5 md:h-5 text-primary" />
                    </div>
                    <span className="text-foreground font-bold text-base md:text-lg">{item}</span>
                  </div>
                </ScrollReveal>
              ))}
            </div>
            <ScrollReveal animation="slide-up">
              <div className="grid grid-cols-3 gap-3 md:gap-4 mb-8 md:mb-10">
                {[
                  { num: "20+", label: "Jobs/Month", color: "text-primary" },
                  { num: "98%", label: "Book Rate", color: "text-primary" },
                  { num: "30", label: "Days Ahead", color: "text-success" },
                ].map((s) => (
                  <div key={s.label} className="bg-card border border-border rounded-xl shadow-lg p-3 md:p-4 text-center">
                    <p className={`text-xl sm:text-2xl md:text-3xl font-heading font-extrabold ${s.color}`}>{s.num}</p>
                    <p className="text-[10px] md:text-xs text-muted-foreground mt-1">{s.label}</p>
                  </div>
                ))}
              </div>
            </ScrollReveal>
            <ScrollReveal animation="slide-up" delay={2}>
              <Button onClick={openModal} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 md:px-8 md:py-5 text-sm md:text-base group">
                Get Booked Jobs <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform" />
              </Button>
            </ScrollReveal>
          </div>
          <div className="relative h-[300px] md:h-[400px] lg:h-auto lg:min-h-[600px]">
            <img src={tabletImg} alt="Dispatch tablet" className="absolute inset-0 w-full h-full object-cover" />
          </div>
        </div>
      </section>

      {/* 4. SOLUTION */}
      <section id="solution" className="py-12 md:py-20 lg:py-28 bg-background">
        <div className="container-main">
          <ScrollReveal animation="scale" className="text-center mb-10 md:mb-16">
            <div className="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
              <Zap className="w-4 h-4 text-primary" />
              <span className="text-xs font-heading font-semibold text-primary uppercase tracking-wider">The System</span>
            </div>
            <h2 className="text-2xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground">
              Introducing the <span className="text-primary">AlignaByte Dispatch™</span> System
            </h2>
          </ScrollReveal>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
            {[
              { icon: Phone, title: "Direct Homeowner Calls", desc: "Real calls sent directly to your dispatch line" },
              { icon: MapPin, title: "Job Matching Engine", desc: "Matched by service type and exact location" },
              { icon: Shield, title: "Intent Filtering", desc: "Low intent inquiries filtered out automatically" },
              { icon: Calendar, title: "Auto Booking", desc: "Projects booked directly into your schedule" },
              { icon: Clock, title: "Pipeline Filled", desc: "Job board filled weeks ahead, always" },
            ].map((item, i) => (
              <ScrollReveal key={item.title} animation="slide-up" delay={Math.min(i + 1, 5) as 1|2|3|4|5}>
                <div className="group bg-card border border-border rounded-2xl p-5 md:p-8 hover:border-primary/30 hover:shadow-lg transition-all h-full">
                  <div className="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-4 md:mb-5 group-hover:bg-primary transition-colors">
                    <item.icon className="w-6 h-6 md:w-7 md:h-7 text-primary group-hover:text-primary-foreground transition-colors" />
                  </div>
                  <h3 className="text-base md:text-lg font-heading font-bold text-foreground mb-2">{item.title}</h3>
                  <p className="text-muted-foreground text-sm leading-relaxed">{item.desc}</p>
                </div>
              </ScrollReveal>
            ))}
            <ScrollReveal animation="slide-up" delay={5}>
              <div className="relative rounded-2xl p-5 md:p-8 flex flex-col justify-between overflow-hidden min-h-[220px] md:min-h-[240px] h-full">
                <img src={solutionDashboard} alt="Scheduling dashboard" loading="lazy" className="absolute inset-0 w-full h-full object-cover" />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/85 to-primary/70" />
                <div className="relative z-10">
                  <p className="text-primary-foreground font-heading font-bold text-lg md:text-xl mb-2 md:mb-3">Your dispatch doesn't chase anymore. It schedules.</p>
                  <p className="text-primary-foreground/90 text-sm mb-4 md:mb-6">Install the system that fills your calendar automatically.</p>
                </div>
                <Button onClick={openModal} className="relative z-10 bg-primary-foreground text-primary rounded-xl font-heading font-bold w-full py-4 md:py-5 text-sm md:text-base">
                  Install My Booking System <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5" />
                </Button>
              </div>
            </ScrollReveal>
          </div>
        </div>
      </section>

      {/* 5. AUTHORITY */}
      <section id="authority" className="py-12 md:py-20 lg:py-28 bg-background">
        <div className="container-main">
          <ScrollReveal animation="slide-up" className="relative rounded-2xl sm:rounded-3xl overflow-hidden min-h-[400px] md:min-h-[500px] flex items-center">
            <img src={homesImg} alt="Multiple homes under construction" className="absolute inset-0 w-full h-full object-cover" />
            <div className="absolute inset-0 bg-gradient-to-r from-foreground/95 via-foreground/90 to-foreground/70 md:to-foreground/60" />
            <div className="absolute top-0 right-0 w-96 h-96 bg-primary/20 rounded-full blur-[120px]" />
            <div className="absolute bottom-0 left-0 w-32 h-1 bg-gradient-to-r from-primary to-accent rounded-full" />
            <div className="relative z-10 p-6 md:p-16 max-w-2xl">
              <div className="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-md border border-primary/30 rounded-full px-4 py-1.5 mb-6 md:mb-8">
                <span className="w-2 h-2 rounded-full bg-primary animate-pulse" />
                <span className="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Exclusive Access</span>
              </div>
              <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-4 md:mb-6 leading-tight">
                We Only Work With{" "}<span className="text-gradient">One Contractor</span>{" "}Per Area
              </h2>
              <p className="text-primary-foreground/90 text-base md:text-lg mb-3 md:mb-4">This system is exclusive.</p>
              <p className="text-primary-foreground/90 text-base md:text-lg mb-3 md:mb-4">We don't flood markets.</p>
              <p className="text-primary-foreground/90 text-base md:text-lg mb-6 md:mb-10">We build <strong className="text-primary-foreground">dominant local operators</strong>.</p>
              <Button onClick={openModal} className="bg-gradient-to-r from-primary to-[hsl(205,80%,45%)] text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base shadow-[0_0_30px_hsl(205_61%_28%/0.4)] hover:-translate-y-0.5 transition-transform group">
                Check My Availability <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform" />
              </Button>
              <div className="flex flex-wrap items-center gap-4 md:gap-6 mt-6 md:mt-8">
                {[
                  { icon: Shield, text: "Protected Territory" },
                  { icon: MapPin, text: "Geo Locked Area" },
                  { icon: Lock, text: "Exclusive Contract" },
                ].map((item) => (
                  <div key={item.text} className="flex items-center gap-2">
                    <item.icon className="w-4 h-4 text-primary" />
                    <span className="text-primary-foreground/90 text-xs md:text-sm">{item.text}</span>
                  </div>
                ))}
              </div>
            </div>
          </ScrollReveal>
        </div>
      </section>

      {/* 6. HOW IT WORKS */}
      <section id="how-it-works" className="relative py-12 md:py-20 lg:py-28 overflow-hidden">
        <img src={howworksBg} alt="Construction blueprints" loading="lazy" className="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]" />
        <div className="absolute inset-0 bg-foreground/80" />
        <div className="relative z-10 container-main">
          <ScrollReveal animation="scale" className="text-center mb-10 md:mb-16">
            <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground">Here's How Your Schedule Gets Filled</h2>
          </ScrollReveal>

          <div className="max-w-3xl mx-auto space-y-3 md:space-y-6">
            {[
              { icon: Users, title: "Homeowner Requests Service", desc: "Real homeowners in your area request the exact service you provide." },
              { icon: Target, title: "System Matches Job Type + Area", desc: "Our engine matches the job to your service type, location, and availability." },
              { icon: Phone, title: "Call Routed to You", desc: "The homeowner call goes directly to your dispatch line. No middlemen." },
              { icon: Calendar, title: "Appointment Booked", desc: "Your team books the appointment and confirms the project details." },
              { icon: CheckCircle2, title: "Project Added to Schedule", desc: "The job lands on your board. Your crew shows up. Work gets done." },
            ].map((step, i) => (
              <ScrollReveal key={step.title} animation="slide-up" delay={Math.min(i + 1, 5) as 1|2|3|4|5}>
                {/* Mobile: vertical layout with number on top */}
                <div className="flex flex-col items-start sm:hidden">
                  <div className="w-10 h-10 rounded-full bg-primary flex items-center justify-center shadow-lg ml-4">
                    <span className="text-primary-foreground font-heading font-bold text-sm">{i + 1}</span>
                  </div>
                  <div className="w-px bg-primary/20 h-3 ml-[1.65rem]" />
                  <div className="bg-foreground/60 border border-primary/15 rounded-xl backdrop-blur-sm shadow-lg p-4 w-full">
                    <div className="flex items-center gap-2 mb-1.5">
                      <div className="w-8 h-8 rounded-lg bg-primary flex items-center justify-center flex-shrink-0">
                        <step.icon className="w-4 h-4 text-primary-foreground" />
                      </div>
                      <h3 className="text-sm text-primary-foreground font-heading font-bold leading-tight">{step.title}</h3>
                    </div>
                    <p className="text-primary-foreground/80 text-xs leading-relaxed">{step.desc}</p>
                  </div>
                </div>

                {/* Desktop: horizontal layout with number on left */}
                <div className="hidden sm:flex items-start gap-3 md:gap-8">
                  <div className="flex flex-col items-center flex-shrink-0 pt-1">
                    <div className="w-10 h-10 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full bg-primary flex items-center justify-center shadow-lg">
                      <span className="text-primary-foreground font-heading font-bold text-sm md:text-lg">{i + 1}</span>
                    </div>
                    {i < 4 && <div className="w-px bg-primary/20 flex-1 min-h-[30px] md:min-h-[40px] mt-2 md:mt-3" />}
                  </div>
                  <div className="bg-foreground/60 border border-primary/15 rounded-xl md:rounded-2xl backdrop-blur-sm shadow-lg p-4 md:p-8 flex-1 min-w-0">
                    <div className="flex items-center gap-2 md:gap-3 mb-1 md:mb-2">
                      <div className="w-8 h-8 md:w-10 md:h-10 rounded-lg md:rounded-xl bg-primary flex items-center justify-center flex-shrink-0">
                        <step.icon className="w-4 h-4 md:w-5 md:h-5 text-primary-foreground" />
                      </div>
                      <h3 className="text-sm md:text-base text-primary-foreground font-heading font-bold leading-tight">{step.title}</h3>
                    </div>
                    <p className="text-primary-foreground/80 text-xs md:text-sm leading-relaxed">{step.desc}</p>
                  </div>
                </div>
              </ScrollReveal>
            ))}
          </div>

          <ScrollReveal animation="slide-up" className="mt-10 md:mt-16">
            <div className="bg-foreground/60 border border-primary/15 backdrop-blur-sm rounded-2xl p-6 md:p-10 text-center max-w-2xl mx-auto">
              <p className="text-lg md:text-xl font-heading font-bold text-primary-foreground mb-1">Your crews stay working.</p>
              <p className="text-lg md:text-xl font-heading font-bold text-accent-blue mb-6 md:mb-8">Your weeks stay full.</p>
              <Button onClick={openModal} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base">
                See It In Action <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5" />
              </Button>
            </div>
          </ScrollReveal>
        </div>
      </section>

      {/* 7. BEFORE & AFTER */}
      <section id="before-after" className="py-12 md:py-20 lg:py-28 bg-background">
        <div className="container-main">
          <ScrollReveal animation="scale" className="text-center mb-10 md:mb-16">
            <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground">
              The Difference Is <span className="text-primary">Night and Day</span>
            </h2>
          </ScrollReveal>

          <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 max-w-4xl mx-auto mb-8 md:mb-12">
            <ScrollReveal animation="slide-left">
              <div className="bg-card border border-border rounded-2xl shadow-xl overflow-hidden">
                <div className="bg-foreground px-5 md:px-6 py-3 md:py-4">
                  <span className="text-primary-foreground font-heading font-bold text-base md:text-lg">Before</span>
                </div>
                <div className="p-4 md:p-6 space-y-3 md:space-y-4">
                  {["2 to 3 jobs per week", "Spotty calls", "Empty schedule", "Manual chasing", "Unclear pipeline"].map((text) => (
                    <div key={text} className="flex items-center gap-2 md:gap-3">
                      <div className="w-7 h-7 md:w-8 md:h-8 rounded-full bg-destructive/10 flex items-center justify-center flex-shrink-0">
                        <X className="w-3 h-3 md:w-4 md:h-4 text-destructive" />
                      </div>
                      <span className="text-muted-foreground text-sm">{text}</span>
                    </div>
                  ))}
                </div>
              </div>
            </ScrollReveal>

            <ScrollReveal animation="slide-right">
              <div className="bg-card border-2 border-primary/30 rounded-2xl shadow-xl ring-4 ring-primary/5 overflow-hidden">
                <div className="bg-primary px-5 md:px-6 py-3 md:py-4 flex items-center gap-2">
                  <TrendingUp className="w-4 h-4 md:w-5 md:h-5 text-primary-foreground" />
                  <span className="text-primary-foreground font-heading font-bold text-base md:text-lg">After</span>
                </div>
                <div className="p-4 md:p-6 space-y-3 md:space-y-4">
                  {["6 to 10 jobs per week", "Consistent bookings", "Fully booked weeks", "Automated dispatch", "Confirmed job flow"].map((text) => (
                    <div key={text} className="flex items-center gap-2 md:gap-3">
                      <div className="w-7 h-7 md:w-8 md:h-8 rounded-full bg-success/10 flex items-center justify-center flex-shrink-0">
                        <Check className="w-3 h-3 md:w-4 md:h-4 text-success" />
                      </div>
                      <span className="text-foreground font-bold text-sm">{text}</span>
                    </div>
                  ))}
                </div>
              </div>
            </ScrollReveal>
          </div>

          <ScrollReveal animation="slide-up" className="text-center">
            <Button onClick={openModal} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 md:px-8 md:py-5 text-sm md:text-base group">
              Upgrade My Job Flow <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform" />
            </Button>
          </ScrollReveal>
        </div>
      </section>

      {/* 8. CASE STUDIES */}
      <section id="case-studies" className="py-12 md:py-20 lg:py-28 bg-foreground">
        <div className="container-main">
          <ScrollReveal animation="scale" className="text-center mb-10 md:mb-16">
            <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground">What Happens When Your Job Flow Is Fixed</h2>
          </ScrollReveal>

          <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 mb-8 md:mb-12">
            {[
              { img: caseRoofing, tag: "Roofing", stat: "32", label: "Booked Jobs", desc: "Crew went from idle gaps to fully scheduled weeks in just 4 weeks" },
              { img: caseGeneral, tag: "General", stat: "6 to 10", label: "Jobs Per Week", desc: "Consistent bookings, no more referral dependency" },
              { img: caseRemodel, tag: "Remodeling", stat: "30 Days", label: "Filled Ahead", desc: "Dispatch operating at full capacity, planned months out" },
            ].map((cs, i) => (
              <ScrollReveal key={cs.stat} animation="slide-up" delay={Math.min(i + 1, 3) as 1|2|3}>
                <div className="group relative h-[280px] sm:h-[320px] md:h-[420px] rounded-2xl overflow-hidden shadow-2xl">
                  <img src={cs.img} alt={cs.tag} loading="lazy" className="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/10" />
                  <div className="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <span className="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">{cs.tag}</span>
                    <p className="text-3xl md:text-4xl font-heading font-extrabold text-primary-foreground mt-1 md:mt-2">{cs.stat}</p>
                    <p className="text-base md:text-lg font-heading font-bold text-primary-foreground">{cs.label}</p>
                    <p className="text-primary-foreground/80 text-xs md:text-sm mt-1">{cs.desc}</p>
                  </div>
                </div>
              </ScrollReveal>
            ))}
          </div>

          <ScrollReveal animation="slide-up" className="text-center">
            <Button onClick={openModal} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base">
              I Want These Results <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5" />
            </Button>
          </ScrollReveal>
        </div>
      </section>

      {/* 9. TESTIMONIALS */}
      <section id="testimonials" className="py-12 md:py-20 lg:py-28 bg-highlight">
        <ScrollReveal animation="scale" className="max-w-5xl mx-auto px-4 text-center mb-8 md:mb-12">
          <div className="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
            <Quote className="w-4 h-4 text-primary" />
            <span className="text-xs font-heading font-semibold text-primary uppercase tracking-wider">Testimonials</span>
          </div>
          <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground">
            Real Contractors. <span className="text-gradient">Real Outcomes.</span>
          </h2>
        </ScrollReveal>

        <div className="max-w-5xl mx-auto px-4 md:px-6 relative">
          <span className="absolute top-0 right-4 md:right-8 font-body text-[50px] sm:text-[70px] md:text-[140px] font-extrabold text-foreground/[0.08] leading-none pointer-events-none select-none">
            {String(testimonialIndex + 1).padStart(2, "0")}
          </span>
          <div className="transition-all duration-300 ease-in-out" style={{ opacity: testimonialFade ? 1 : 0, transform: testimonialFade ? "translateY(0)" : "translateY(12px)" }}>
            <blockquote className="font-heading text-base sm:text-lg md:text-2xl lg:text-3xl font-semibold text-foreground leading-[1.2] max-w-3xl mb-4 md:mb-6">&ldquo;{t.quote}&rdquo;</blockquote>
            <div className="inline-flex items-center gap-1.5 bg-primary/10 border border-primary/20 rounded-full px-3 py-1 mb-4 md:mb-6">
              <span className="text-xs">📊</span>
              <span className="text-xs font-body font-semibold text-primary">{t.stat}</span>
            </div>
            <div className="flex items-center gap-3">
              <div className="w-9 h-9 md:w-12 md:h-12 rounded-full bg-primary/10 flex items-center justify-center">
                <span className="text-primary font-heading font-bold text-xs md:text-base">{t.avatar}</span>
              </div>
              <div className="text-left">
                <p className="font-body font-semibold text-foreground text-sm">{t.name}</p>
                <p className="font-body text-muted-foreground text-xs">{t.role}</p>
              </div>
            </div>
          </div>
          <div className="mt-6 md:mt-16 pt-4 md:pt-6 border-t border-border flex items-center justify-between">
            <div className="flex items-center gap-3">
              <div className="flex gap-1.5">
                {testimonials.map((_, i) => (
                  <button key={i} onClick={() => goToTestimonial(i)} className={`h-[2px] rounded-full transition-all ${i === testimonialIndex ? "w-5 md:w-8 bg-foreground" : "w-5 md:w-8 bg-border"}`} />
                ))}
              </div>
              <span className="font-mono text-[10px] md:text-xs text-muted-foreground">
                {String(testimonialIndex + 1).padStart(2, "0")}/{String(testimonials.length).padStart(2, "0")}
              </span>
            </div>
            <div className="flex items-center gap-2">
              <button onClick={() => goToTestimonial((testimonialIndex - 1 + testimonials.length) % testimonials.length)} className="w-8 h-8 md:w-10 md:h-10 rounded-full border border-border flex items-center justify-center hover:bg-card transition-colors">
                <ChevronLeft className="w-4 h-4 text-foreground" />
              </button>
              <button onClick={() => goToTestimonial((testimonialIndex + 1) % testimonials.length)} className="w-8 h-8 md:w-10 md:h-10 rounded-full border border-border flex items-center justify-center hover:bg-card transition-colors">
                <ChevronRight className="w-4 h-4 text-foreground" />
              </button>
            </div>
          </div>
        </div>
      </section>

      {/* 10. FINAL CLOSE */}
      <section id="final" className="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src={finalSunset} alt="Neighborhood at sunset" loading="lazy" className="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]" />
        <div className="absolute inset-0 bg-gradient-to-br from-primary/90 via-[hsl(205,61%,24%)]/85 to-[hsl(205,80%,18%)]/90" />
        <div className="relative z-10 container-main text-center max-w-3xl mx-auto">
          <ScrollReveal animation="scale">
            <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-5 md:mb-8">How Many Jobs Did You Miss This Month?</h2>
          </ScrollReveal>
          <ScrollReveal animation="slide-up" delay={1}>
            <p className="text-base md:text-xl text-primary-foreground mb-2">Fix your pipeline once</p>
            <p className="text-base md:text-xl text-primary-foreground font-medium mb-8 md:mb-12">And never worry about empty weeks again.</p>
          </ScrollReveal>
          <ScrollReveal animation="slide-up" delay={2}>
            <Button onClick={openModal} className="bg-primary-foreground text-primary rounded-xl font-heading font-bold shadow-2xl py-4 px-6 text-sm md:py-5 md:px-12 md:text-lg hover:bg-primary-foreground/90 group">
              Fill My Calendar Now <ArrowRight className="ml-2 w-4 h-4 md:w-6 md:h-6 group-hover:translate-x-1 transition-transform" />
            </Button>
          </ScrollReveal>
        </div>
      </section>
    </div>
  );
};

export default Index;
