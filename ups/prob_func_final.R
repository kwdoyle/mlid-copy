nprob <- function(n, A, P)
{ # A & P are vectors containing all n's and probabilities for those n's

B <- c()
B <- factorial(A)
  
n.f <- factorial(n)

for (i in 1:length(P) & 1:length(A))
{
  X <- c()
  X <- P[i]^A[i]
}

return((n.f / prod(B)) * prod(X))

}