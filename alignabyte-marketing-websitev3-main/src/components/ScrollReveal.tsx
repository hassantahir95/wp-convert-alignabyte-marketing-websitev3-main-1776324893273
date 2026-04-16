import { useScrollReveal } from "@/hooks/use-scroll-reveal";
import { cn } from "@/lib/utils";

interface ScrollRevealProps {
  children: React.ReactNode;
  animation?: "scale" | "slide-up" | "slide-left" | "slide-right" | "shutter";
  delay?: number; // 1-5
  className?: string;
  threshold?: number;
}

const ScrollReveal = ({
  children,
  animation = "slide-up",
  delay,
  className,
  threshold = 0.15,
}: ScrollRevealProps) => {
  const { ref, isVisible } = useScrollReveal<HTMLDivElement>(threshold);

  return (
    <div
      ref={ref}
      className={cn(
        `sr-${animation}`,
        isVisible && "sr-visible",
        delay && `sr-delay-${delay}`,
        className
      )}
    >
      {children}
    </div>
  );
};

export default ScrollReveal;
