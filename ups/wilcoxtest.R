read.csv("http://mylifeisdoyle.com/ups/CellDiameters.csv", header=T, sep=",") -> diameters

deplete <- diameters$X1.nm
replete <- diameters$X100.nm

coxtest <- wilcox.test(deplete, replete, alternative="less", paired=T)

print(coxtest)

# I don't know anything really about a wilcox test but I think it's the correct test and also the p-value is less than 0.05 so I guess the results are still significant?
# According to www.r-tutor.com, "At .05 significance level, we conclude […] the data set […] are nonidentical populations."

# LOL never mind, wilcox is some non-parametric rank test called willcox signed rank which has nothing to do with what I was trying to test for here. I have so much knowledge now omg.
