import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Accordion, AccordionContent, AccordionItem, AccordionTrigger } from "@/components/ui/accordion";
import { ArrowRight } from "lucide-react";
import heroAerial from "@/assets/hero-aerial.jpg";
import finalSunset from "@/assets/final-sunset.jpg";
import caseRoofing from "@/assets/case-roofing-new.jpg";
import caseGeneral from "@/assets/case-general-new.jpg";
import caseRemodel from "@/assets/case-remodel-new.jpg";
import BookingModal from "@/components/BookingModal";
import ScrollReveal from "@/components/ScrollReveal";

const caseStudies = [
  {
    id: "case-1", label: "Case Study 01", title: "From Idle Gaps to Fully Scheduled",
    image: caseRoofing, imageAlt: "Roofing project in progress",
    problem: "A residential roofing contractor in Texas was relying entirely on word of mouth. Crews were sitting idle 2 to 3 days every week, and revenue was unpredictable month to month.",
    solution: "We deployed AlignaByte Dispatch™ with geo targeted homeowner calls and automated scheduling directly into their dispatch calendar.",
    challenges: "The team had no prior experience with digital lead systems and initially resisted changing their workflow. We provided hands on onboarding and weekly optimization calls.",
    results: "32 confirmed projects booked within 4 weeks. 100% schedule utilization. Zero idle crew days. 3x revenue increase in the first 30 days.",
  },
  {
    id: "case-2", label: "Case Study 02", title: "Breaking Free From Referral Dependency",
    image: caseGeneral, imageAlt: "General contracting site",
    problem: "A general contractor in Florida was entirely dependent on referrals. When referrals slowed, so did revenue. There was no predictable pipeline and no way to forecast upcoming work.",
    solution: "AlignaByte Dispatch™ created a consistent flow of 6 to 10 pre qualified, booked jobs per week using intent filtered homeowner calls matched to their service area.",
    challenges: "Transitioning from a referral mindset to a system driven pipeline required a shift in how the owner thought about growth. We guided the transition over 3 weeks.",
    results: "Eliminated referral dependency completely. Predictable weekly revenue. Expanded operations to a second crew within 60 days.",
  },
  {
    id: "case-3", label: "Case Study 03", title: "Dispatch at Full Capacity",
    image: caseRemodel, imageAlt: "Kitchen remodeling project",
    problem: "A remodeling company in Ohio had a reactive dispatch process, always scrambling to fill the next week. Material waste was high because jobs were planned last minute.",
    solution: "AlignaByte Marketing filled their job board 30 days in advance with confirmed residential projects, giving full visibility into upcoming work and material needs.",
    challenges: "The company had 3 crews and needed to coordinate scheduling across all of them without overlap. We customized the dispatch flow to handle multi crew routing.",
    results: "30 day forward visibility on all scheduled work. Reduced material waste by 40%. Hired 3 additional crew members to handle the increased volume.",
  },
];

const CaseStudies = () => {
  const [modalOpen, setModalOpen] = useState(false);

  return (
    <div className="min-h-screen pt-16 md:pt-20">
      <BookingModal open={modalOpen} onClose={() => setModalOpen(false)} />

      {/* HERO */}
      <section className="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src={heroAerial} alt="Aerial construction view" className="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]" />
        <div className="absolute inset-0 bg-foreground/85" />
        <div className="relative z-10 container-main text-center">
          <div className="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-5 md:mb-8 animate-fade-in-up">
            <span className="w-2 h-2 rounded-full bg-success animate-pulse" />
            <span className="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Case Studies</span>
          </div>
          <h1 className="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-6 animate-fade-in-up delay-100">
            What Happens When Your <span className="text-accent-blue">Job Flow Is Fixed</span>
          </h1>
          <p className="text-sm md:text-lg text-primary-foreground/90 max-w-2xl mx-auto animate-fade-in-up delay-200">
            Real contractors. Real numbers. Real transformation.
          </p>
        </div>
      </section>

      {/* ACCORDION CASE STUDIES */}
      <section className="py-12 md:py-20 lg:py-28 bg-background">
        <div className="container-main">
          <ScrollReveal animation="scale" className="text-center mb-10 md:mb-16">
            <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground mb-3 md:mb-4">
              Real Contractors. Real Outcomes.
            </h2>
            <p className="text-sm md:text-lg text-muted-foreground max-w-2xl mx-auto">
              See how contractors like you transformed their dispatch with AlignaByte Marketing.
            </p>
          </ScrollReveal>

          <Accordion type="single" collapsible className="space-y-4 md:space-y-5">
            {caseStudies.map((cs, i) => (
              <ScrollReveal key={cs.id} animation="slide-up" delay={Math.min(i + 1, 3) as 1|2|3}>
                <AccordionItem value={cs.id} className="border border-border rounded-2xl overflow-hidden bg-card shadow-sm data-[state=open]:shadow-lg transition-shadow">
                  <AccordionTrigger className="hover:no-underline p-0 pr-4 md:pr-10 [&>svg]:w-5 [&>svg]:h-5 [&>svg]:text-muted-foreground">
                    <div className="flex items-stretch w-full">
                      <div className="hidden sm:block w-1/4 flex-shrink-0 relative min-h-[80px]">
                        <img src={cs.image} alt={cs.imageAlt} loading="lazy" className="absolute inset-0 w-full h-full object-cover" />
                      </div>
                      <div className="flex-1 text-left py-4 px-4 md:py-6 md:px-8">
                        <span className="text-[10px] md:text-xs font-heading font-semibold text-primary uppercase tracking-wider">{cs.label}</span>
                        <h3 className="text-sm sm:text-base md:text-xl font-heading font-bold text-foreground mt-1">{cs.title}</h3>
                      </div>
                    </div>
                  </AccordionTrigger>
                  <AccordionContent className="px-4 md:px-8 sm:pl-[calc(25%+1.5rem)] md:sm:pl-[calc(25%+2rem)] pb-6 md:pb-8 pt-2">
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                      {[
                        { heading: "The Problem", text: cs.problem },
                        { heading: "The Solution", text: cs.solution },
                        { heading: "The Challenges", text: cs.challenges },
                        { heading: "The Results", text: cs.results },
                      ].map((block) => (
                        <div key={block.heading}>
                          <h4 className="text-xs md:text-sm font-heading font-bold text-primary uppercase tracking-wider mb-1.5 md:mb-2">{block.heading}</h4>
                          <p className="text-muted-foreground text-xs md:text-sm leading-relaxed">{block.text}</p>
                        </div>
                      ))}
                    </div>
                  </AccordionContent>
                </AccordionItem>
              </ScrollReveal>
            ))}
          </Accordion>

          <ScrollReveal animation="slide-up" className="text-center mt-10 md:mt-14">
            <Button onClick={() => setModalOpen(true)} className="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base">
              I Want These Results <ArrowRight className="ml-2 w-4 h-4 md:w-5 md:h-5" />
            </Button>
          </ScrollReveal>
        </div>
      </section>

      {/* FINAL CTA */}
      <section className="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src={finalSunset} alt="Neighborhood sunset" loading="lazy" className="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]" />
        <div className="absolute inset-0 bg-gradient-to-br from-primary/90 via-[hsl(205,61%,24%)]/85 to-[hsl(205,80%,18%)]/90" />
        <div className="relative z-10 container-main text-center max-w-3xl mx-auto">
          <ScrollReveal animation="scale">
            <h2 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-5 md:mb-8">Your Success Story Starts Here</h2>
          </ScrollReveal>
          <ScrollReveal animation="slide-up" delay={1}>
            <p className="text-base md:text-xl text-primary-foreground/90 mb-8 md:mb-12">Join the contractors who stopped chasing and started scheduling.</p>
          </ScrollReveal>
          <ScrollReveal animation="slide-up" delay={2}>
            <Button onClick={() => setModalOpen(true)} className="bg-primary-foreground text-primary rounded-xl font-heading font-bold shadow-2xl px-6 py-4 text-sm md:px-10 md:py-7 md:text-lg hover:bg-primary-foreground/90 group">
              Fill My Calendar Now <ArrowRight className="ml-2 w-4 h-4 md:w-6 md:h-6 group-hover:translate-x-1 transition-transform" />
            </Button>
          </ScrollReveal>
        </div>
      </section>
    </div>
  );
};

export default CaseStudies;
